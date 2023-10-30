<form>
    <label for="limit">Show:</label>
    <select name="limit" id="limit" onchange="this.form.submit()">
        <option value="10" <?php if ($limit == 10) echo 'selected'; ?>>10</option>
        <option value="25" <?php if ($limit == 25) echo 'selected'; ?>>25</option>
        <option value="50" <?php if ($limit == 50) echo 'selected'; ?>>50</option>
        <option value="75" <?php if ($limit == 75) echo 'selected'; ?>>75</option>
        <option value="100" <?php if ($limit == 100) echo 'selected'; ?>>100</option>
    </select>

    <label for="startDate">Start Date:</label>
    <input type="date" name="startDate" id="startDate" value="<?php echo $startDate; ?>" onchange="this.form.submit()">
    
    <label for="language">Programming Language:</label>
    <select name="language" id="language" onchange="this.form.submit()">
        <option value="" <?php if ($language == '') echo 'selected'; ?>>All</option>
        <option value="PHP" <?php if ($language == 'PHP') echo 'selected'; ?>>PHP</option>
        <option value="JavaScript" <?php if ($language == 'JavaScript') echo 'selected'; ?>>JavaScript</option>
        <option value="TypeScript" <?php if ($language == 'TypeScript') echo 'selected'; ?>>TypeScript</option>
        <option value="Python" <?php if ($language == 'Python') echo 'selected'; ?>>Python</option>
        <option value="Java" <?php if ($language == 'Java') echo 'selected'; ?>>Java</option>
        <option value="C++" <?php if ($language == 'C++') echo 'selected'; ?>>C++</option>
        <option value="Rust" <?php if ($language == 'Rust') echo 'selected'; ?>>Rust</option>
        <!-- Add more options for other languages -->
    </select>
</form>