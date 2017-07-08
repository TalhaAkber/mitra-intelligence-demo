# A demo request from Mitra Intelligence

Given Task:
You have data of two different events, Lola and Hula of the years 2014-2017. First, I want to have two boxes to choose which event and which year to be displayed.

Next, the scores of behavioural intentions, satisfaction and line-up should be displayed in 3 different boxes. All can have a score between 1-100. In the screenshot, you see a blue line in each box and it represents the score / 100. Next, I would like to see the score in blue. I also would like to see the absolute and relative change compared to the previous period indicated with a green arrow for a positive change and red for negative. If there is no change, everything should be empty and there should a grey circle.

![Alt text](https://raw.githubusercontent.com/TalhaAkber/mitra-intelligence-demo/master/problem_statement_and_solution/wanted-visual.png?raw=true "Required Task")

Provided Data:

![Alt text](https://raw.githubusercontent.com/TalhaAkber/mitra-intelligence-demo/master/problem_statement_and_solution/provided-data.png?raw=true "Required Task")

Solution provided:

![Alt text](https://raw.githubusercontent.com/TalhaAkber/mitra-intelligence-demo/master/problem_statement_and_solution/solution-provided.png?raw=true "Required Task")

### Note:

This application is made on Laravel 5.4 and AngularJS 1.6 for data binding (UI).
### Server Requirements:

PHP >= 5.6.4 <br />
OpenSSL PHP Extension <br />
PDO PHP Extension <br />
Mbstring PHP Extension <br />
Tokenizer PHP Extension <br />
XML PHP Extension <br />

To run migration and seeding please create an empty database in MYSQL and update the database name in .ENV file which can be found in the root folder.

### Help:

For laravel migration <br />
php artisan migrate

For database seeding <br />
php artisan db:seed

Serve using artisan <br />
php artisan serve <br />
(you can modify the port as you like)
