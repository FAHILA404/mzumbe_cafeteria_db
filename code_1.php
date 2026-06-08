<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Mzumbe Cafeteria Food Ordering System</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="app.js"></script>
</head>
<body>

    <div id="container">
        <div id="header">
            <h1>MZUMBE UNIVERSITY CAFETERIA</h1>
            <p>Smart Food Ordering System — CSS 221 Coursework</p>
        </div>

        <div id="order-box">
            <h2>Place Your Food Order</h2>
            <div id="status-message"></div>

            <form id="foodForm" action="process.php" method="post">
                <div class="form-group">
                    <label for="student_name">Full Name:</label>
                    <input type="text" id="student_name" name="student_name" />
                </div>

                <div class="form-group">
                    <label for="cafeteria_name">Select Cafeteria:</label>
                    <select id="cafeteria_name" name="cafeteria_name">
                        <option value="">-- Choose Cafeteria --</option>
                        <option value="Main Cafeteria">Main Cafeteria (Hostel Area)</option>
                        <option value="FST Cafeteria">FST Cafeteria (Science Block)</option>
                        <option value="Chox Cafeteria">Chox Cafeteria</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="food_item">Select Food Item:</label>
                    <select id="food_item" name="food_item">
                        <option value="">-- Choose Food --</option>
                        <option value="Wali Nyama">Wali Nyama - TZS 2,000</option>
                        <option value="Ugali Samaki">Ugali Samaki - TZS 2,500</option>
                        <option value="Chips Mayai">Chips Mayai - TZS 3,000</option>
                        <option value="Pilau Kuku">Pilau Kuku - TZS 3,500</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="quantity">Quantity:</label>
                    <input type="number" id="quantity" name="quantity" min="1" value="1" />
                </div>

                <div class="form-group">
                    <input type="submit" id="submitBtn" value="Submit Order Now" />
                </div>
            </form>
        </div>
        
        <div id="footer">
            <p>&copy; 2026 Mzumbe University. Developed under Academic Guidance of Bertha M. Lebalwa, MSc.</p>
        </div>
    </div>

</body>
</html>