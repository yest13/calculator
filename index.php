<?php
function renderSelector(string $operation)
{
    $select = '';
    foreach (['+', '-', '*', '/'] as $value) {
        if ($value === $operation) {
            $selected = 'selected';
        } else {
            $selected = '';
        };

        $select .= '<option ' . $selected . ' value="' . $value . '"> ' . $value . ' </option>';
    }
    return $select;
}
$leftArg = $_POST['x1'] ?? null;
$rightArg = $_POST['x2'] ?? null;
$operation = $_POST['operation'] ?? '';
$result = $_POST['result'] ?? '';
$result = '';
interface iMath
{
    public function sum($leftArg, $rightArg);
    public function subtract($leftArg, $rightArg);
    public function multiply($leftArg, $rightArg);
    public function divide($leftArg, $rightArg);
}
require_once 'Math.php';
$res = new Math();
switch ($operation){
    case '+':
        $result = $res->sum($leftArg, $rightArg);
    break;
    case '-':
        $result = $res->subtract($leftArg, $rightArg);
    break;
    case '*':
        $result = $res->multiply($leftArg, $rightArg);
    break;
    case '/':
        $result = $res->divide($leftArg, $rightArg);
    break;
}
$select = '';
echo '<html>
<head>
    <title>Калькулятор</title>
</head>
<body>
<form action="/index.php" method="post">
    <input type="text" name="x1" value="' . $leftArg . '">
    <select name="operation">
        ' . renderSelector($operation) . '
    </select>
    <input type="text" name="x2" value="' . $rightArg . '">
    <input type="submit" value="Посчитать">
</form>
<input type="text" value="' . $result . '">
</body>
</html>';
