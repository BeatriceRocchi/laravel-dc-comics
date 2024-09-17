# DC Comics Dashboard

Backoffice dashboard of a DC Comics store on Laravel framework with features of reading, editing, adding, and deleting comics data in the MySQL relational database.

## Installation

In order to access the code, go to my GitHub at the following link: https://github.com/BeatriceRocchi/laravel-dc-comics.
Now clone the repository, open it in your IDE and install all the dependencies, run by running the development server and open the artisan server:

```bash
npm install
npm run dev
```

```bash
php artisan serve
```

## Description

![DCComics](public/DCComics.gif)

The backoffice dashboard is made up of an aside menu on the left that allows to navigate across all the sections.

1. Home

    The home offers a summary of the comics in the archive. For each comic there are the following data: title, series, type. Moreover, there is a quick access to:

    - green info button: shows more details of the comic
    - orange edit button: allows to enter the editing form of the comic
    - red trash button: allows to delete the comic from the database archive.

    On the right of the home there are a todo list and a FAQ section to simplify the use of the dashboard.

2. Archive

    The archive shows all the available comics. Like the summary in the home, for each comic there is a quick access to get more information, edit and, delete the comic. Furthermore for each comic there is the cover image.

3. Add comic
   This form allows to add a new comic in the archive. For each comic, the following information are required:
    - title
    - series
    - type
    - data of sell
    - price
    - cover image
    - graphics
    - writers
    - description
      By clicking on "Add comic" button, the comic is added in the database.
