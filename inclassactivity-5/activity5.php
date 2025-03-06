<!DOCTYPE html>
<html lang="en">
<head>
    <title>Currency Calculation</title>
    <meta name="description" content="CENG 311 Inclass Activity 5" />
    <style>
        table {
            border-collapse: collapse;
        }
        td {
            padding: 5px;
        }
    </style>
</head>
<body>

    <?php
    // Döviz kurları (örnek)
    $exchange_rates = [
        "USD" => ["USD" => 1, "CAD" => 1.43, "EUR" => 0.92],
        "CAD" => ["USD" => 0.70, "CAD" => 1, "EUR" => 0.65],
        "EUR" => ["USD" => 1.08, "CAD" => 1.54, "EUR" => 1],
    ];

    $converted_amount = "";
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['amount']) && isset($_GET['from_currency']) && isset($_GET['to_currency'])) {
        $amount = floatval($_GET['amount']);
        $from = $_GET['from_currency'];
        $to = $_GET['to_currency'];
        $converted_amount = $amount * $exchange_rates[$from][$to];
    }
    ?>

    <form action="" method="GET">
        <table>
            <tr>
                <td>From:</td>
                <td><input type="text" name="amount" value="<?php echo isset($_GET['amount']) ? $_GET['amount'] : ''; ?>" /></td>
                <td>Currency:</td>
                <td>
                    <select name="from_currency">
                        <option value="USD" <?php if(isset($_GET['from_currency']) && $_GET['from_currency'] == "USD") echo "selected"; ?>>USD</option>
                        <option value="CAD" <?php if(isset($_GET['from_currency']) && $_GET['from_currency'] == "CAD") echo "selected"; ?>>Canadian Dollar</option>
                        <option value="EUR" <?php if(isset($_GET['from_currency']) && $_GET['from_currency'] == "EUR") echo "selected"; ?>>Euro</option>
                    </select>
                </td>   
            </tr>
            <tr>
                <td>To:</td>
                <td><input type="text" name="converted_amount" value="<?php echo $converted_amount !== "" ? round($converted_amount, 2) : ''; ?>" readonly/></td>
                <td>Currency:</td>
                <td>
                    <select name="to_currency">
                        <option value="USD" <?php if(isset($_GET['to_currency']) && $_GET['to_currency'] == "USD") echo "selected"; ?>>USD</option>
                        <option value="CAD" <?php if(isset($_GET['to_currency']) && $_GET['to_currency'] == "CAD") echo "selected"; ?>>Canadian Dollar</option>
                        <option value="EUR" <?php if(isset($_GET['to_currency']) && $_GET['to_currency'] == "EUR") echo "selected"; ?>>Euro</option>
                    </select>
                </td>   
            </tr>
            <tr>
                <td colspan="4" align="right"><input type="submit" value="convert"/></td>   
            </tr>
        </table>
    </form>        

</body>
</html>
