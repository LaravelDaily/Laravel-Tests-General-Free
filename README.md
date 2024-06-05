## Test Your Laravel Skills

This repository is a test for you: perform a set of tasks listed below, and fix the PHPUnit tests, which are currently intentionally failing.

To **automatically** test if all the Routes work correctly, there are PHPUnit tests in the `tests/Feature/GeneralTest.php` file.

In the very beginning, if you run `php artisan test`, all 7 tests fail:

![](https://laraveldaily.com/uploads/2024/06/free-general-tasks-failing-tests.png)

Your task is to make those tests pass:

![](https://laraveldaily.com/uploads/2024/06/free-general-tasks-passing-tests.png)

## IMPORTANT NOTICE - TESTING DATABASE IS MYSQL

**TESTS ARE CONFIGURED TO RUN ON A LOCAL MYSQL DATABASE (NOT SQLITE) WHICH SHOULD BE CALLED "mysql_testing"**

**DON'T FORGET TO CREATE THAT DATABASE**

**ALSO, THAT DB WILL BE WIPED A LOT WITHIN TESTS BY "migrate:fresh"**

## How to Install Project Locally

This is a typical Laravel project, so the process is pretty standard:

```sh
git clone https://github.com/LaravelDaily/Laravel-Tests-General-Free project
cd project
cp .env.example .env  # edit your env variables
composer install
php artisan key:generate
npm install && npm run build
```

And then try to run `php artisan test`. It will show errors that you need to fix one by one.

You may even skip launching the project in the browser, as it will show errors there, too.

---

## Task 1. Routes: Route with Single Action Controller.

In `routes/web.php` point `/` URL to the Single Action HomeController.

Test method `test_home_screen_returns_home_view_and_shows_homepage()`.

---

## Task 2. Validation: Validation with Form Request.

In `app/Http/Controllers/PostController.php` file, validation is performed via class `StorePostRequest`, but the class doesn't exist, intentionally. Your task is to create it, with parameters of authorized true, and validation rules of title/body as required fields.

Test method `test_form_request_validation()`.

---

## Task 3. File Uploads: Update: Delete Old File.

In `app/Http/Controllers/PostController.php` file, in the `update()` method, we upload the new file but don't delete the old one. Help to clean up the disk and delete the old file.

Test method `test_remove_old_file_when_updating_post()`.

---

## Task 4. Eloquent with Relations: BelongsToMany - Extra Fields in Pivot Table.

In the route `/teams`, the table should show the teams with users, each user with a few additional fields. Fix the relationship definition in `app/Models/Team.php` so that the Blade file `teams/index.blade.php` would show the correct data.

Test method `test_teams_with_users()`.

---

## Task 5. Eloquent Basics: Update or New Record.

In `app/Http/Controllers/UserController.php` file method `check_update()`, find a user by `$name` and update it with `$email`. If not found, create a user with `$name`, `$email` and random password

Test method `test_check_or_update_user()`.

---

## Task 6. Migrations: Auto-Delete Related Records

Folder `database/migrations/task6` contains migrations for category and products tables. You need to modify the products migration, so that deleting the category would auto-delete its products, instead of throwing an error.

Test method `test_delete_parent_child_record()`.

---

## Task 7. Auth: Password with Letters

By default, registration form requires password with at least 8 characters. Add a validation rule so that password must have at least one letter, no matter uppercase or lowercase.

So password `12345678` is invalid, but password `a12345678` is valid.

Hint: you need to modify file `app/Http/Controllers/Auth/RegisteredUserController.php`, which is almost default from Laravel Breeze.

Test method: `test_password_at_least_one_uppercase_lowercase_letter`().

---

## Task 8. Blade: Loop in the Table.

The file `resources/views/users/index.blade.php` should show the loop of all users, or "No content" row, if no users are in the database.

Test method `test_loop_shows_table()`.

---

## Submit Your Solution to Get a Review/Badge

If you make a Pull Request to the `main` branch, it will automatically run the tests via **Github Actions** and show you/us if the tests pass.

![](https://laraveldaily.com/uploads/2024/06/free-general-tasks-github-actions.png)

If you want us to also approve/review it manually and give you a virtual badge, please mention **@LaravelDaily** in the comment/description of the Pull Request with additional questions if you have any.

Then, someone on our team will review and manually assign you a badge for this topic on the [LaravelDaily.com](https://laraveldaily.com) website.

If you don't know how to make a Pull Request, [here's my video with instructions](https://www.youtube.com/watch?v=vEcT6JIFji0).

---

## Questions / Problems / Ideas?

If you're struggling with some of the tasks or have suggestions on improving them, create a Github Issue.

Good luck!
