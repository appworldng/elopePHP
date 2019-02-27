# elopePHP
A simple lightweight, fast-processing PHP framework that utilizes the MVC approach from ground up and helps you build web applications faster.

## Introduction
The elopePHP uses the active record pattern for object relational mapping of its records to model objects, making it easier for you to access the column values of your RDBMS without having to worry about the new columns or changes to the database schema.

### Models
You can quickly create your own models by simply extending the parent **model** class. Your child model will able to utilize the already defined parent methods such as **fetchAll()**, **getRecord($id)**, **addRecord($args)**, **delRecord($id)**, **editRecord($id, $args)** :
```
//Define Class
class User extends Model {

}

//Instantiate Object & access methods
$users = new User();
$allUsers = $users->fetchAll();
$specificUser = $users->getRecord(1);

//You can now display any column within your users table
echo $specificUser->ID;
```