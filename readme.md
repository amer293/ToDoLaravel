# ToDo Laravel

This Laravel application is a Todo list. You can Creat, Read, Update and Delete tasks in the todo app.

## Installation

To use this you have to do the following:

```bash
composer install
composer require laravelcollective/html:^5.4.0
```
In the app/config/app.php you need to add the provider and aliasses:

```bash
Provider:

Collective\Html\HtmlServiceProvider::class,

Aliasses:

'Form' => Collective\Html\FormFacade::class,
'Html' => Collective\Html\HtmlFacade::class,
```