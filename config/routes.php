<?php

$routes = array(
    //default routes
    array('home','default','index'),
    array('cgu', 'default', 'cgu'),
    array('mentions', 'default', 'mentionsLegales'),
    array('logout', 'default', 'logout'),
    array('contact', 'default', 'contact'),
    array('login', 'default', 'login'),
    array('register', 'default', 'register'),
    array('forgot', 'default', 'forgot'),
    array('changePassword', 'default', 'changePassword',array('token')),
    array('logout', 'default', 'logout'),

    // user routes
    array('account', 'user', 'account'),
    array('accountKids','accountKids', 'index')
);









