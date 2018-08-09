<?php
move_uploaded_file($_FILES["pic"]['tmp_name'], "uploads/post/" . $_FILES["pic"]['tmp_name']);