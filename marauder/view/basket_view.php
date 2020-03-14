<!doctype html>

<html>
    <head>
        <title>Basket</title>
        <center><h1><b>Basket</b></h1></center>
        <link rel="stylesheet" href="../style/border.css">
    </head>
    <boby>
      <center><input type="button" onclick="window.location.href = '../controller/home.php';" value="Home"/>
      <input type="button" onclick="window.location.href = '../controller/ticketlist.php';" value="Tickets"/>
      <input type="button" onclick="window.location.href = '../controller/basketlist.php';" value="Basket"/></center>


    <center><p>This is the basket page, where you can see what tickets you added to your purchase list.</p></center>

<table id="ticketTable">
      <thead>
        <tr>
          <th>Opponent</th>
          <th>Match Type</th>
          <th>Seating</th>
          <th>Date</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($ticketInBasket as $ticket): ?>
        <tr>
          <td><?=$ticket->opponent ?></td>
          <td><?=$ticket->matchType ?></td>
          <td><?=$ticket->seating ?></td>
          <td><?=$ticket->date ?></td>
        </tr>
        <?php endforeach ?>
      </tbody>
    </table>
    
    <p>Ticket(s) in basket: <?= $numberOfTickets ?></p> 
    <form action="basketlist.php" method="GET">
      <input type="hidden" name="clearBasket">
      <input name="ClearButton" type="submit" value="Clear basket">
    </form>


    </body>
    <footer>
    <p>Thank you for your purchase.</p>
    </footer>
</html>
