<!-- Tanhueco, Jean Kyle S. -->
<!-- WD-201 -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>The Forge Bank</title>
  <style>
    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
    }
    body {
      background: #000000;
      color: #f5a623;
      font-family: 'Roboto Condensed', sans-serif;
      display: flex;
      flex-direction: column;
    }
    header {
      height: 110px;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 1em;
      margin-bottom: 1.5em;
    }
    header img {
      height: 60px;
    }
    h1 {
      font-weight: bold;
      text-transform: uppercase;
      letter-spacing: 0.2em;
      font-size: 2.4em;
      margin: 0;
      color: #f5a623;
    }
    section {
      background-color: #111111;
      padding: 1.8em 2.2em;
      border-radius: 12px;
      width: max-content;
      margin: 0 auto;
      box-shadow: 0 10px 25px rgba(245, 166, 35, 0.25);
    }
    .account-owner {
      color: #ffffff;
      font-size: 1em;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      margin-bottom: 0.6em;
    }
    h2 {
      color: #cccccc;
      font-weight: normal;
      text-transform: uppercase;
      letter-spacing: 0.12em;
      margin-bottom: 1.2em;
    }
    table {
      border-collapse: collapse;
    }
    th, td {
      padding: 0.8em 2.5em 0.8em 0;
    }
    th {
      text-align: left;
      text-transform: uppercase;
      letter-spacing: 0.15em;
      border-bottom: 1px solid #444444;
      font-weight: normal;
      color: #bbbbbb;
      font-size: 0.85em;
    }
    tr:nth-child(even) td {
      background-color: rgba(255, 255, 255, 0.05);
    }
    td.credit {
      color: #6ee7b7;
      font-weight: bold;
    }
    td.overdrawn {
      color: #f5a623;
      font-weight: bold;
    }
    footer {
      margin-top: auto;
      text-align: center;
      padding: 1em 0;
      font-size: 0.85em;
      color: #aaaaaa;
      border-top: 1px solid #222222;
      letter-spacing: 0.1em;
    }
  </style>
</head>
<body>
<header>
  <img src="https://tr.rbxcdn.com/180DAY-58787894df1cf1af8916dc9321343795/420/420/Hat/Webp/noFilter" alt="The Forge Bank Logo">
  <h1>The Forge Bank</h1>
</header>
<section>
  <div class="account-owner">
    Account Details For: Tze Protori
  </div>
  <h2>Account Summary</h2>
  <table>
    <tr>
      <th>Account Number</th>
      <th>Account Type</th>
      <th>Balance</th>
    </tr>
    <tr>
      <td>1001-001</td>
      <td>Savings Account</td>
      <td class="credit">₱15,000.00</td>
    </tr>
    <tr>
      <td>1001-002</td>
      <td>Checking Account</td>
      <td class="overdrawn">₱-2,500.00</td>
    </tr>
    <tr>
      <td>1001-003</td>
      <td>Payroll Account</td>
      <td class="credit">₱8,200.00</td>
    </tr>
    <tr>
      <td>1001-004</td>
      <td>Time Deposit</td>
      <td class="credit">₱50,000.00</td>
    </tr>
  </table>
</section>
<footer>
  © 2026 The Forge Bank · All Rights Reserved
</footer>

</body>
</html>
