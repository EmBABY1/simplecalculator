<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .calculator {
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
        text-align: center;
    }

    form {
        text-align: center;
    }

    input[type="text"] {
        width: 100px;
        padding: 8px;
        margin: 5px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }

    select {
        padding: 8px;
        margin: 5px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }

    button {
        padding: 10px 20px;
        background-color: #4caf50;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    button:hover {
        background-color: #45a049;
    }

    h2 {
        text-align: center;
        margin-top: 20px;
    }
</style>
<form method="POST" action="calculate">

    @csrf

    <input type="text" name="operand1" placeholder="Enter the first number" required>

    <select name="operator" required>

        <option value="add">+</option>

        <option value="subtract">-</option>

        <option value="multiply">*</option>

        <option value="divide">/</option>

    </select>

    <input type="text" name="operand2" placeholder="Enter the second number" required>
    <br>
    <button type="submit">Calculate</button>
    @php
        global $result;

        echo 'result=' . $result;
    @endphp
</form>
