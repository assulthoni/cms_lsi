# Content Management System with Latent Semantic Indexing search

Project ini sebelumnya dibangun atas dasar request dari seseorang yang sedang mengambil TA di ITP Padang. Development dilakukan oleh tiga orang yaitu Ahmad Shohibus Sulthoni (me), Ifen Faridian, Arddhana Zafran. Development dilakukan menggunakan 2 bahasa yaitu PHP untuk pembuatan web. Dan script Python untuk perhitungan LSI.

## Getting Started

Cara-cara untuk mulai

### Prerequisites

mysql
PHP>=7.0
composer
Python>=3.5 with pip


### Installing

import db_base(1).sql to your mysql server

run :
cd cms-laravel-python
composer install
python -m pip install -r requirements.txt

cp .env.example .env
php artisan key:generate
set your database in .env
