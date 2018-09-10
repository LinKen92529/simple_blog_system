<?php
include 'plugin/Parsedown.php';
$text = "---
title: '[TOJ][365]G.大龍貓'
date: 2017-12-26 20:50:14
tags: TOJ
---
### 題目

給定一個數列，為一群龍貓的『高度』。
定義只要ai + 1 == aj ( i + 1 == j )（這邊的 i, j是指足碼）就稱為愉悅龍貓群
請實作出支援單點修改及區間查詢的code
題目原網址：<http://toj.tfcis.org/oj/pro/365/>

<!--more-->

### 解法

先定義一個資料型態piece，裡面包含了一個愉悅龍貓群的資料：開始位置、結束位置、長度（長度可有可無，只是計算上方便）
 
接著定義另外一種資料型態，用在線段樹上維護的node。node包含三個piece，分別是這區間內，從區間頭開始的愉悅龍貓群、最長愉悅龍貓群、結束於區間尾的愉悅龍貓群，總共三個
 
在up兩個node的時候（假設兩個node分別叫 l, r 、up後的node叫stop好了，相對位置 l 在 r 前面），l.fro一定是stop.fro----因為在這兩個區間裡，最前面的愉悅龍貓群一定是 l.fro，同理，stop.bck一定是r.bck。
那麼，stop.ma呢？

stop.ma有兩種可能性，第一種就是l.ma或r.ma的其中一個（看誰長度大就誰），另外一種就是，如果merge ( l.bck, r.fro )也是一個愉悅龍貓群的時候，可能會比l.ma或r.ma還要大


### 總結

其實這題不難，只是coding有點複雜，query && update都與正常的線段樹差不多，只是up需要思考一下（？）


### code

```cpp
// by. MiohitoKiri5474
#include<bits/stdc++.h>

using namespace std;

#define maxN 100005

struct piece{
    int f, s, sz;
};

inline bool same ( piece a, piece b ){
    return a.f == b.f && a.s == b.s;
}

struct node{
    piece fro, bck, ma;
} seg[maxN << 2];

int basic[maxN];

inline node up ( node L, node R ){
    node res;
    res.fro = L.fro, res.bck = R.bck, res.ma = ( L.ma.sz > R.ma.sz ? L.ma : R.ma );

    if ( basic[L.bck.s] + 1 == basic[R.fro.f] ){
        piece stop = piece { L.bck.f, R.fro.s, R.fro.s - L.bck.f + 1 };

        if ( same ( L.fro, L.bck ) )
            res.fro = stop;
        if ( same ( R.fro, R.bck ) )
            res.bck = stop;

        res.ma = ( stop.sz > res.ma.sz ? stop : res.ma );
    }

    return res;
}

inline void build ( int l, int r, int n ){
    if ( l == r )
        seg[n].fro = seg[n].bck = seg[n].ma = piece { l, r, 1 };
    else{
        int mid = ( l + r ) >> 1, leftSon = n << 1, rightSon = leftSon | 1;
        build ( l, mid, leftSon );
        build ( mid + 1, r, rightSon );

        seg[n] = up ( seg[leftSon], seg[rightSon] );
    }
}

void update ( int l, int r, int Index, int n ){
    if ( l == r )
        return;
    int mid = ( l + r ) >> 1, leftSon = n << 1, rightSon = leftSon | 1;
    if ( Index <= mid )
        update ( l, mid, Index, leftSon );
    else
        update ( mid + 1, r, Index, rightSon );

    seg[n] = up ( seg[leftSon], seg[rightSon] );
}

node query ( int l, int r, int nowL, int nowR, int n ){
    if ( l <= nowL && nowR <= r )
        return seg[n];
    int mid = ( nowL + nowR ) >> 1, leftSon = n << 1, rightSon = leftSon | 1;
    if ( r <= mid )
        return query ( l, r, nowL, mid, leftSon );
    if ( mid < l )
        return query ( l, r, mid + 1, nowR, rightSon );
    return up ( query ( l, r, nowL, mid, leftSon ), query ( l, r, mid + 1, nowR, rightSon ) );
}

int main(){
    ios::sync_with_stdio ( false );
    cin.tie ( 0 );
    cout.tie ( 0 );

    int n, q, l, r, type;
    cin >> n;
    for ( int i = 1 ; i <= n ; i++ )
        cin >> basic[i];
    build ( 1, n, 1 );

    cin >> q;
    while ( q-- ){
        cin >> type >> l >> r;
        if ( type == 1 ){
            basic[l] = r;
            update ( 1, n, l, 1 );
        }
        else
            cout << query ( l, r, 1, n, 1 ).ma.sz << '\n';
    }
}
```";
$parsedown = new Parsedown;
$parsedown->setMarkupEscaped(true);
echo $parsedown->text($text);