<!doctype html>

<html>
    <head>
        <title>Basket</title>
        <center><h1><b>Basket</b></h1></center>
    </head>
    <boby>
      <center><input type="button" onclick="window.location.href = 'home.php';" value="Home"/>
      <input type="button" onclick="window.location.href = 'ticketlist.php';" value="Tickets"/>
      <input type="button" onclick="window.location.href = 'basketlist.php';" value="Basket"/></center>


    <center><p>This is the basket page, where you can see what tickets you added to your purchase list.</p></center>

<table>
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

    </body>
    <footer>
    <p>Thank you for your purchase.</p>
    </footer>
</html>