
This is an experimental CMS developed using Laravel framework for managing YouTube video links and text contents
======================================

1.	Two types of posts can be uploaded: 1. YouTube video links, 2. text posts,
2.	You just need to post video url, iframe is not required,
3.	There are two sections on frontend and from admin panel, you can choose the section where you want to show your post,
4.	You can publish or unpublish posts,
5.	You can upload image for posts, otherwise, the system will show a default image,
6.	Image is not required for YouTube links, the system will automatically collect image thumb from YouTube,
7.	You always have the opportunity to override YouTube generated thumb by uploading an image,
8.	A play button is shown on the bottom right corner of image thumb on landing/home page,
9.	Title of the posts must be unique, uniqueness is checked by Ajax,
10.	The short description field is required and checked using Laravel validation,
11.	The title is field also required and checked using HTML attribute.


Note:
=====================================

1.	Screenshots of frontend and admin panel are included with the repository (‘project-screenshots’ folder),
2.	Database is included with the repository (‘project-database’ folder)
