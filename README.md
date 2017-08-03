Property Web Builder
====================
This is a ready to use Laravel based web application for creating real estate websites.
 
 **Note that the in-progress branch contains the latest feature. However, masters branch contains the most stable updates**
 


**The most up-to-date feature is available in the in-progress branch.**


Description
============
This is a drop-in real estate web application that agents and agencies can use to list available properties. 
This project is inspired by [etewiah's project](https://github.com/etewiah/property_web_builder) which was created with Ruby on Rails
It has multi-tenancy built into it. It can easily be used to manage two different group of users with different permission level. 
  
How to use
==========
- Clone this repo
- Run *php artisan migrate*
- Run *php artisan db:seed*
- use these credentials to login test@test.com test123


Technology Stack
================
- The application is based on *Laravel 5.4* 
- The Backend uses [AdminLTE Template](https://github.com/almasaeed2010/AdminLTE)

Features TODOs
==============

Front-End
---------
- Home Page
- List Properties for Sale
- List Properties for Renting
- Property details page
- About Agency Page
- Contact Agency Page

Admin-End
---------
- Dashboard/Statistics
    - A bar chart of different types of properties available on listing and their quantity
- Edit Home Page Contents


Features IMPLEMENTED
====================
Admin-End
--------
- Admin Template Completely setup
- Authentication/Registration
- Adding of Properties
- Editing/Updating of Properties with photos, location and property features
- Database Migrations and Seeder
- Site Content: About, Contact, Terms and Conditions, Footer, Privacy Policy, and Social Media Account Links.
- Site Settings: Features, Property Types, Property States, and Currency.
- Manage Users from the Backend - by Admin alone
- Super-Admin Access Control
- Other Users can just post properties alone 

Front-End
---------
- 


SETUP ERRORS/CONFIG
====================
If you are encountering errors during installation or setup you can read the SETUP_CONFIG.md file in the root of the application. It may contain the solution



Sponsors
========
**We need a sponsor to provide us with a demo server**

Property Web Builder is proudly sponsored by
- [Prodsters Community](https://prodsters.com) - A community of African talents capable of handling your outsourced projects

Contribution Guideline
======================
- Pick a feature in the todo list that you want to implement or suggest one
- Kindly reach out to hello[at]prodsters.com
- We will get back to you and add you to the repo as a contributor


License
=======
[Apache 2.0](LICENSE)