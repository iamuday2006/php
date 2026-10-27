<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Lists, Nested Lists and Tables</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
    // Simple data used for demonstration purposes only.
    $assignmentSteps = [
        "Read and understand the assignment brief",
        "List the topics and resources required",
        "Write the HTML structure using lists and tables",
        "Add CSS for basic layout and styling",
        "Test the page in a browser and review"
    ];

    $subjects = [
        "Computer Fundamentals",
        "Programming in C",
        "Database Management Systems",
        "Web Development",
        "Data Structures",
        "Operating Systems",
        "Software Engineering",
        "Computer Networks"
    ];

    $timetable = [
        ["Monday",    "Math", "C Programming", "English", "DBMS"],
        ["Tuesday",   "C Programming", "Math", "DBMS", "English"],
        ["Wednesday", "DBMS", "C Programming", "OS", "Math"],
        ["Thursday",  "OS", "Data Structures", "C Programming", "DBMS"],
        ["Friday",    "Data Structures", "OS", "Web Dev", "English"]
    ];
    ?>

    <h1>HTML Lists, Nested Lists and Tables</h1>
    <p>HTML helps organize information clearly using lists and tables. Lists present related items in order or as bullet points, while tables arrange data in rows and columns for easy comparison. This page demonstrates ordered lists, unordered lists, description lists, nested lists, and tables with borders, merged cells (<code>rowspan</code> and <code>colspan</code>), and accessible headers.</p>

    <!-- Section B: Ordered List -->
    <div class="section">
        <h2>1. Ordered List</h2>
        <p>Steps to complete a course assignment:</p>
        <ol>
            <?php foreach ($assignmentSteps as $step): ?>
                <li><?php echo htmlspecialchars($step); ?></li>
            <?php endforeach; ?>
        </ol>
    </div>

    <!-- Section C: Unordered List -->
    <div class="section">
        <h2>2. Unordered List</h2>
        <p>Subjects in a BCA semester:</p>
        <ul>
            <?php foreach ($subjects as $subject): ?>
                <li><?php echo htmlspecialchars($subject); ?></li>
            <?php endforeach; ?>
        </ul>
    </div>

    <!-- Section D: Description List -->
    <div class="section">
        <h2>3. Description List</h2>
        <p>Definitions of common HTML terms:</p>
        <dl>
            <dt>Ordered List</dt>
            <dd>A numbered list (&lt;ol&gt;) where items appear in a specific sequence.</dd>

            <dt>Unordered List</dt>
            <dd>A bulleted list (&lt;ul&gt;) where item order does not matter.</dd>

            <dt>Nested List</dt>
            <dd>A list placed inside another list item to show hierarchy or grouping.</dd>

            <dt>Table</dt>
            <dd>An arrangement of rows and columns (&lt;table&gt;) used to display structured data.</dd>

            <dt>Table Cell</dt>
            <dd>A single unit (&lt;td&gt; for data, &lt;th&gt; for header) within a table row.</dd>
        </dl>
    </div>

    <!-- Section E: Nested Course Hierarchy -->
    <div class="section">
        <h2>4. Nested Course Hierarchy</h2>
        <p>A BCA course organized into semesters and subjects using nested lists:</p>
        <ul>
            <li>BCA
                <ul>
                    <li>Semester 1
                        <ul>
                            <li>Computer Fundamentals</li>
                            <li>Programming in C</li>
                            <li>Mathematics</li>
                        </ul>
                    </li>
                    <li>Semester 2
                        <ul>
                            <li>Database Management Systems</li>
                            <li>Web Development</li>
                            <li>Data Structures</li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </div>

    <!-- Section F: Class Timetable -->
    <div class="section">
        <h2>5. Class Timetable</h2>
        <p>A weekly timetable showing table headers, row headers, rowspan, and colspan:</p>
        <table>
            <caption>BCA Class Timetable — Monday to Friday</caption>
            <thead>
                <tr>
                    <th scope="col">Day</th>
                    <th scope="col">Period 1</th>
                    <th scope="col">Period 2</th>
                    <th scope="col">Period 3</th>
                    <th scope="col">Period 4</th>
                    <th scope="col" colspan="2">Period 5 &amp; 6</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($timetable as $row): ?>
                    <tr>
                        <th scope="row"><?php echo htmlspecialchars($row[0]); ?></th>
                        <td><?php echo htmlspecialchars($row[1]); ?></td>
                        <td><?php echo htmlspecialchars($row[2]); ?></td>
                        <td><?php echo htmlspecialchars($row[3]); ?></td>
                        <td><?php echo htmlspecialchars($row[4]); ?></td>
                        <td colspan="2">Lunch Break</td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <p class="note"><strong>Merged cells:</strong> "Lunch Break" uses <code>colspan="2"</code> to merge Period 5 and Period 6 into one cell.</p>

        <table>
            <caption>Rowspan Example — Lab Spanning Two Days</caption>
            <thead>
                <tr>
                    <th scope="col">Day</th>
                    <th scope="col">Period 1</th>
                    <th scope="col">Period 2</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Monday</th>
                    <th scope="row" rowspan="2">C Programming Lab</th>
                    <td>Math</td>
                </tr>
                <tr>
                    <th scope="row">Tuesday</th>
                    <td>English</td>
                </tr>
                <tr>
                    <th scope="row">Wednesday</th>
                    <td>DBMS</td>
                    <td>OS</td>
                </tr>
            </tbody>
        </table>

        <p class="note"><strong>Rowspan:</strong> "C Programming Lab" uses <code>rowspan="2"</code> to span the Period 1 cell across Monday and Tuesday.</p>
    </div>
    </div>

    <!-- Section G: Practical Summary -->
    <div class="section">
        <h2>6. Practical Summary</h2>
        <h3>When to use lists</h3>
        <p>Use lists when items belong together but do not need a grid layout — for example, assignment steps, subject names, or a course hierarchy.</p>
        <h3>When to use tables</h3>
        <p>Use tables when data is naturally arranged in rows and columns — for example, a class timetable, a student marksheet, or an exam schedule. Use <code>scope</code> on header cells so screen readers can associate headers with their data.</p>
    </div>

</body>
</html>