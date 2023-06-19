<style>
    .form-container {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f5f5f5;
    }

    .form-container h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    .form-container .form-group {
        margin-bottom: 20px;
    }

    .form-container label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }

    .form-container input[type="text"],
    .form-container textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        resize: vertical;
    }

    .form-container button[type="submit"] {
        display: block;
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 4px;
        background-color: #4CAF50;
        color: white;
        cursor: pointer;
    }

    .form-container button[type="submit"]:hover {
        background-color: #45a049;
    }

    .form-container .alert {
        margin-bottom: 20px;
        padding: 10px;
        border-radius: 4px;
    }

    .form-container .alert-success {
        background-color: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
    }

    .form-container .alert-danger {
        background-color: #f8d7da;
        color: #721c24;
        border: 1px solid #f5c6cb;
    }
</style>

<div class="form-container">
    <h2>Create Polling Unit</h2>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="/polling-units" method="POST">
        @csrf

        <div class="form-group">
            <label for="uniqueid">Unique ID:</label>
            <input type="text" name="uniqueid" id="uniqueid" required>
        </div>

        <div class="form-group">
            <label for="ward_id">Ward ID:</label>
            <input type="text" name="ward_id" id="ward_id" required>
        </div>

        <div class="form-group">
            <label for="lga_id">LGA ID:</label>
            <input type="text" name="lga_id" id="lga_id" required>
        </div>

        <div class="form-group">
            <label for="uniquewardid">Unique Ward ID:</label>
            <input type="text" name="uniquewardid" id="uniquewardid" required>
        </div>

        <div class="form-group">
            <label for="polling_unit_number">Polling Unit Number:</label>
            <input type="text" name="polling_unit_number" id="polling_unit_number" required>
        </div>

        <div class="form-group">
            <label for="polling_unit_name">Polling Unit Name:</label>
            <input type="text" name="polling_unit_name" id="polling_unit_name" required>
        </div>

        <div class="form-group">
            <label for="polling_unit_description">Polling Unit Description:</label>
            <textarea name="polling_unit_description" id="polling_unit_description" rows="3" required></textarea>
        </div>

        <div class="form-group">
            <label for="lat">Latitude:</label>
            <input type="text" name="lat" id="lat" required>
        </div>

        <div class="form-group">
            <label for="lat">pollin id:</label>
            <input type="text" name="polling_unit_id" id="lat" required>
        </div>
        <div class="form-group">
            <label for="long">Longitude:</label>
            <input type="text" name="long" id="long" required>
        </div>

        <div class="form-group">
            <label for="entered_by_user">Entered by User:</label>
            <input type="text" name="entered_by_user" id="entered_by_user" required>
        </div>

        <div class="form-group">
            <label for="date_entered">Date Entered:</label>
            <input type="text" name="date_entered" id="date_entered" required>
        </div>

        <div class="form-group">
            <label for="user_ip_address">User IP Address:</label>
            <input type="text" name="user_ip_address" id="user_ip_address" required>
        </div>

        <button type="submit">Submit</button>
    </form>
</div>
