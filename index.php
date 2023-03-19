<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>PHP Expense Tracker</title>
</head>

<body>
   <?php
   $expenses = array();
   ?>

   <h1>PHP Expense Tracker</h1>

   <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      Expense: <input type="text" name="name"><br>
      Amount: <input type="number" name="amount"><br>
      Date: <input type="date" name="date"><br>
      <input type="submit">
   </form>

   <?php
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $expense = array();
      $expense['name'] = $_POST['name'];
      $expense['amount'] = $_POST['amount'];
      $expense['date'] = $_POST['date'];

      array_push($expenses, $expense);
   }
   ?>

   <br>
   <br>

   <table>
      <tr>
         <th>Expense Name</th>
         <th>Amount</th>
         <th>Date</th>
         <th>Payment Type</th>
      </tr>
      <tr>
         <td><?php echo $_POST["name"] ?></td>
         <td><?php echo $_POST["amount"] ?></td>
         <td><?php echo $_POST["date"] ?></td>
      </tr>
   </table>

</body>

</html>