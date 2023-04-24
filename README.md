# laravel commands

*php artisan migrate:refresh* => refreshes the database schema by rolling back all migrations and then re-running them

*php artisan migrate:refresh --seed* =>  refreshes the database schema by rolling back all migrations and then re-running them. Additionally, it also runs the database seeders to populate the database with initial data.

*php artisan make:model "model_name"* => creating model

# laravel

By default, Laravel assumes that the table name for a model is the plural form of the model's name, converted to snake case. For example:

A *Listing model* would use the *listings* table.
A *User model* would use the *users* table.
An *ImageGallery* model would use the *image_galleries* table.
