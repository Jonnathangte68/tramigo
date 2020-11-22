## tramigo

Hi, I've created this project in response to question 3 for the tramigo technical task.

Steps completed so far: 

- [x] 3.1. Configure the Laravel app to connect to the database from item #1.
- [x] 3.2. Use the command `php artisan make:command Tracking` to create a console
     command in Laravel. This should add a file Tracking.php in
     Laravel/app/Console/Commands/Tracking.php
- [x] 3.3. Edit Tracking.php, such that when executing the command
     `php artisan track`, the script queries devices and corresponding reports
     from the database and dumps them to the screen.

## Instalation instructions

     * configure .env
     * run `composer install` or `composer update` in the project directory
     * run command `php artisan track`

## Example "dump and die" result show after executing track command

```
jonnathanguarate@Jonnathans-MacBook-Pro:~/tramigo/tramigo_webserver (development)$ php artisan trackarray:5 [  0 => array:3 [
    "ID" => 1
    "Name" => "Device One"
    "reports" => array:1 [
      0 => array:4 [
        "ID" => 1
        "Device_ID" => 1
        "Location" => "Helsinki"
        "DateCreated" => "2019-05-15 00:27:15"
      ]
    ]
  ]
  1 => array:3 [
    "ID" => 2
    "Name" => "Device Two"
    "reports" => array:1 [
      0 => array:4 [
        "ID" => 2
        "Device_ID" => 2
        "Location" => "Espoo"
        "DateCreated" => "2019-11-22 17:12:25"
      ]
    ]
  ]
  2 => array:3 [
    "ID" => 3
    "Name" => "Device Three"
    "reports" => array:1 [
      0 => array:4 [
        "ID" => 3
        "Device_ID" => 3
        "Location" => "Tampere"
        "DateCreated" => "2020-01-01 13:17:17"
      ]
    ]
  ]
  3 => array:3 [
    "ID" => 4
    "Name" => "Device Four"
    "reports" => array:2 [
      0 => array:4 [
        "ID" => 4
        "Device_ID" => 4
        "Location" => "Vantaa"
        "DateCreated" => "2020-03-05 16:23:32"
      ]
      1 => array:4 [
        "ID" => 5
        "Device_ID" => 4
        "Location" => "Turku"
        "DateCreated" => "2020-11-21 18:58:21"
      ]
    ]
  ]
  4 => array:3 [
    "ID" => 5
    "Name" => "Device Five"
    "reports" => array:1 [
      0 => array:4 [
        "ID" => 6
        "Device_ID" => 5
        "Location" => "Oulu"
        "DateCreated" => "2020-05-16 22:15:25"
      ]
    ]
  ]
]
```