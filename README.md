# laravel commands

*php artisan migrate:refresh* => refreshes the database schema by rolling back all migrations and then re-running them

*php artisan migrate:refresh --seed* =>  refreshes the database schema by rolling back all migrations and then re-running them. Additionally, it also runs the database seeders to populate the database with initial data.

*php artisan make:model "model_name"* => creating model
*php artisan make:factory "factory_name"* => creating model


# laravel

By default, Laravel assumes that the table name for a model is the plural form of the model's name, converted to snake case. For example:

A *Listing model* would use the *listings* table.
A *User model* would use the *users* table.
An *ImageGallery* model would use the *image_galleries* table.


In Laravel, seeders and factories are tools for populating a database with test data.

Seeders are classes that define the initial data to be inserted into the database when it is first created or when it is reset. They are typically used to insert a set of static data (e.g., default user accounts, predefined roles) that should always be present in the database. 

Laravel uses naming conventions to determine the factory class to use for a given model. By default, Laravel expects the factory class for a model to be named the same as the model, but with the word Factory appended to the end. For example, the factory class for the Listing model would be named ListingFactory.


