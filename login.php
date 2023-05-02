<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width-device-width, initial scale =1.0">
    <title>Water Luv | Orders</title>
    <link rel="stylesheet" href="OrderStyle.css")>
</head>

<body>
    <header>
    <image align="left" position="relative" src="logo.png" alt="waterluv logo" width="95px" height="95px" border="0">
    <nav class="navigation">
        <a href="About-Us.html">About Us</a>
        <a href="ProductsServices.html">Products and Services</a>
        <a href="Orders.html">Orders</a>
        <a href="Login.html">Login</a>
        <br />
        <br />
        <br />

    </nav>
    </header>

    <section>
        <table>
            <tr>
                <td>
                    <form onsubmit="event.preventDefault();onFormSubmit();" autocomplete="off" >
                        <div>
                            <label> Customer Name</label><label class="validation-error hide" id="NameValidationError">This field is required.</label>
                            <input type="text" name="customerName" id="customerName">
                        </div>
                        <div>
                            <label>Product Order</label>
                            <input type="text" name="productOrder" id="productOrder">
                        </div>
                        <div>
                            <label>Service Order</label>
                            <input type="text" name="serviceOrder" id="serviceOrder">
                        </div>
                        <div>
                            <label>Total Amount</label>
                            <input type="text" name="totalOrder" id="totalOrder">
                        </div>
                        <div>
                            <label>Order Date</label>
                            <input type="text" name="orderDate" id="orderDate">
                        </div>
                        <div class="form-action-buttons">
                            <input type="submit" value="Submit">
                        </div>
                    </form>
                </td>
                <td>
                    <table class="list" id="orderList">
                        <thead>
                            <tr>
                                <th>Customer Name</th>
                                <th>Product Order</th>
                                <th>Service Order</th>
                                <th>Total Amount</th>
                                <th>Order Date</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </td>
            </tr>
        </table>
    </section>
    <script src="orderscript.js"></script>
</body>
</html>
