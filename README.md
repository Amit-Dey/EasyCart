# EasyCart – Simplified Online Shopping Platform
A comprehensive e-commerce platform built using Laravel, offering functionalities like product management, user authentication, and order processing.

## Tools & Technologies:
**Laravel, PHP, MySQL, JavaScript, HTML, CSS.**

## Features:
1. **User Authentication**
A secure registration and login system for users and admins is needed.
2. **Product Management**
    Add, update, and delete products with detailed descriptions, pricing, and images.
3. **Shopping Cart Functionality**
    Add items to the cart, update quantities, and remove products easily.
4. **Order Management**
    Track orders, manage statuses, and provide seamless order processing.
5. **Search and Filter**
    Efficient product search with category-based filtering.
6. **Payment Integration**
    Ready to integrate payment gateways for secure online transactions.
7. **Responsive Design**
    Mobile-friendly interface for a seamless user experience on all devices.
8. **Admin Dashboard**
    Control panel for managing products, users, and orders.
10. **Dynamic User Interface**
    Clean and interactive design using modern frontend technologies.
11. **Database Integration**
    MySQL database to store user data, orders, and product details securely.


## Home Page:
![1](https://user-images.githubusercontent.com/64111533/219829731-7ac6875b-7742-4c9f-b244-05f2f301d484.png)

## Products:
![2](https://user-images.githubusercontent.com/64111533/219829735-a783ef1b-af80-4805-8503-954f67f5c0b1.png)

## Product Details:
![3](https://user-images.githubusercontent.com/64111533/219829736-7087e903-e7e2-4c41-b0b7-21b566d52a12.png)

## User Cart:
![4](https://user-images.githubusercontent.com/64111533/219829737-fe26f873-81e0-4b30-a124-2bf64a2a78ea.png)

## Admin Product Page:
![5](https://user-images.githubusercontent.com/64111533/219829738-c17eb516-e20f-4327-ae36-ff9faa46911e.png)

## Admin Add Product Page:
![7](https://user-images.githubusercontent.com/64111533/219829938-44818739-3840-45a6-8904-f568c1d1e715.png)

## Admin Order Control Page:
![6](https://user-images.githubusercontent.com/64111533/219829742-8a83b78f-39a9-41ca-976e-8f4b25da31f5.png)


## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

# Laravel Xampp Setup (Windows & Mac)

## Install Xampp
Install Xampp from https://www.apachefriends.org/index.html

- Run the Xampp installer and open the Xampp control panel
- Make sure that you enable the Apache and MySQL services
- On mac you need to click "Start" on the Home tab, "Enable" on the Network tab and "Mount" on the Location Tab. Click "Explore" on the location tab to open your Xampp/Lampp folder

## Install Composer
Go to https://getcomposer.org/download

- On Windows, download and run the installer
- On Mac, copy the php commands and run in the terminal. Then copy the mv command and run in terminal. You can also install composer with Homebrew

## Create a New Laravel Project With Composer

Open a terminal in the htdocs folder. htdocs is where all of your local projects go.

htdocs folder location:
- **Windows** - C:\Xampp\htdocs
- **Mac** - /opt/lampp/htdocs

```
composer create-project --prefer-dist laravel/laravel PROJECT_NAME
```
## Virtual Host Setup

We now need to create a virtual host for our project

## Edit Hosts File

- **Windows** - C:/Windows/System32/drivers/etc/hosts
- **Mac** - /etc/hosts

Add these lines

```
127.0.0.1	localhost
127.0.0.1	PROJECT_NAME.test

```

## Edit Virtual Hosts File

- **Windows** - C:/xampp/apache/conf/extra/httpd-vhosts.conf
```
<VirtualHost *:80>
    DocumentRoot "C:/xampp/htdocs"
    ServerName localhost
</VirtualHost>

<VirtualHost *:80>
    DocumentRoot "C:/xampp/htdocs/PROJECT_NAME/public"
    ServerName PROJECT_NAME.test
 </VirtualHost>
```

- **Mac** - /opt/lampp/etc/extra/httpd-vhosts.conf
```
<VirtualHost *:80>
    DocumentRoot /opt/lampp/htdocs
    ServerName localhost
    ServerAlias www.localhost
</VirtualHost>


<VirtualHost *:80>
    DocumentRoot /opt/lampp/htdocs/PROJECT_NAME/public
    ServerName PROJECT_NAME.test
    ServerAlias www.PROJECT_NAME.test
</VirtualHost>
```

### Restart Apache with the Xampp panel

Now visit http://laravel.test ot htttp://laravel.test:8080 on Mac

## If it does not work, make sure virtual hosts file is enabled in httpd.conf
- **Windows** - C:/xampp/apache/conf/httpd.conf
- **Mac** - /opt/lampp/etc/httpd.conf

Remove the # from the beginning of this line

```
#Include etc/extra/httpd-vhosts.conf
```
