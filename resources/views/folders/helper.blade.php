@vite(['resources/js/app.js','resources/css/main.css'])
@vite(['resources/css/button.css'])
<html>
<body class="iframe-body">
<div class="helper">
<div class="helperSearch">
            
        <form target="_blank" action="../action/helper.php" method="post">
<input type="number" name="ticket" placeholder="Helper Ticket">
<a href="header.php"> 
    <button type="submit">GO</button>
</a>
</form>
<form target="_blank" action="../action/jiraСsd.php" method="post">
<label>Минусовое значение это SUP</label><br>
<input type="number" name="ticketJira"  placeholder="Jira Ticket">
<a href="jiraСsd.php"> 
    <button type="submit">GO</button>
</a>
</form>
        </div>
    <div class="link">
<a href="https://jira.csd.com.ua/secure/Tempo.jspa#/my-work"
        target="_blank"><button>TEMPO</button></a>
    <a href="https://helper.bizonoff-dev.net/admin/projects/medcloud/knowledge-bases/dokumentatsiia-funktsionala"
        target="_blank"><button>Helper</button></a>
        </div>

        <table>

  <thead>
    <tr>
      <th scope="col">name</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>

    <?
//  foreach($helper_log as $helper_logs) { 

        ?>
    <tr>
      <td>
        <a href="" target="_blank">
            
        </a>
        </td>
      <td></td>

    </tr>

  </tbody>
</table>
    </div>

</body>
</html>