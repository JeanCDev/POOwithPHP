<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>POO</title>
</head>
<body>
  
  <?php

    require_once('Classes/Pen.php');
    require_once('Classes/Account.php');
    require_once('Classes/TvController.php');
    require_once('Classes/Person.php');
    require_once('Classes/Book.php');
    require_once('Classes/Teacher.php');
    require_once('Classes/Student.php');
    require_once('Classes/Scholarship.php');
    require_once('Classes/Visitor.php');

    /*
      $pen1 = new Pen('Bic', 'Black', 50, true);
      $pen1->write('Olá <br>'); 
      var_dump($pen1);
    */

    /* 
      $account = new Account(1, 'cp', 'Jean');
      $account2 = new Account(2, 'cc', 'Jubileu');
      $account->deposit(50);
      $account2->withdraw(50);
      $account2->monthlyPayment();
      $account->monthlyPayment();
      $account->closeAccount();
      $account2->closeAccount();
      var_dump($account);
      var_dump($account2);
    */

    // $controller = new TvController();
    /* 
      echo '<pre>';
      $people = [
        new Person('Jean', 25, "M"),
        new Person('Maria', 22, "F")
      ];

      $books = [
        new Book('20 Mil légua submarinas', "Julio Verne", 380, $people[0]),
        new Book('Ação Humana', "Ludwig von Mises", 800, $people[1])
      ];

      $books[0]->open();
      $books[0]->switchPage(80);
      $books[0]->nextPage();
      $books[0]->details();
      $books[1]->details();
    */

    /*   
      $teacher = new Teacher();
      $teacher->name = 'Jean';
      $teacher->specialty = 'Matemática';
      $teacher->salary = 3500;
      $teacher->age = 35;
      $teacher->sex = "M";
      $teacher->salaryRaise(500);
      echo '<pre>';
      var_dump($teacher); 
    */

    $student = new Student('Jean', 25, 'M', 'ADS', 1556);
    $scholarship = new Scholarship('Amanda', 18, 'f', 'Computer Science', 1557, 50);
    $visitor = new Visitor('Jean', 25, 'M');
    
    $scholarship->payMonthlyFee();
    var_dump($student);

  ?>

</body>
</html>