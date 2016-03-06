<table>
	<tr>
		<td><?php echo $value; ?></td>
	</tr>
</table>

		<?php
			/*
				Site Statistics Module

				@Authors:
					Maiko Franisco Rugeria
					Jan Brian Despi
					Michael Romero
					Christian Lizardo
			*/

			//--------------------------------------------------Functions---------------------------------------------------
			/*
				This function counts all the users registered
				in the system. Users include faculty members
				and students.

				@parameters: None
				@return: None
			*/
			// function countUsers()
			// {
			// 	$usercount_value = 0;
			// 	$usercount_sql = "SELECT * FROM users";
			// 	$usercount_result = mysqli_query($GLOBALS["conn"], $usercount_sql);
			// 	if (mysqli_num_rows($usercount_result) > 0)
			// 	{
			// 	    while($row = mysqli_fetch_assoc($usercount_result))
			// 	        $usercount_value++;
		 //    	}

			// 	echo "Number of Users: " . $usercount_value . "<br>";

			// 	$dateStamp_users = date("Ymd");
		 //    	$insertUsercount_sql = "INSERT INTO user_statistics (`value`, `date`) values (" . $usercount_value .  ", " . $dateStamp_users . ")";
			// 	$insertUsercount_result = mysqli_query($GLOBALS["conn"], $insertUsercount_sql);
			// }

			/*
				This function counts all the users that are
				registered as students.

				@parameters: None
				@return: None
			*/
			// function countStudents()
			// {
			// 	$studentcount_value = 0;
			// 	$studentcount_sql = "SELECT * FROM students";
			// 	$studentcount_result = mysqli_query($GLOBALS["conn"], $studentcount_sql);
			// 	if (mysqli_num_rows($studentcount_result) > 0)
			// 	{
			// 	    while($row = mysqli_fetch_assoc($studentcount_result))
			// 	        $studentcount_value++;
		 //    	}

			// 	echo "Number of Students: " . $studentcount_value . "<br>";

			// 	$dateStamp_students = date("Ymd");
			// 	$insertStudentcount_sql = "INSERT INTO student_statistics (`value`, `date`) values (" . $studentcount_value .  ", " . $dateStamp_students . ")";
			// 	$insertStudentcount_result = mysqli_query($GLOBALS["conn"], $insertStudentcount_sql);
			// }

			/*
				This function counts all the users that are
				registered as faculty.

				@parameters: None
				@return: None
			*/
			// function countFaculty()
			// {
			// 	$facultycount_value = 0;
			// 	$facultycount_sql = "SELECT * FROM faculty";
			// 	$facultycount_result = mysqli_query($GLOBALS["conn"], $facultycount_sql);
			// 	if (mysqli_num_rows($facultycount_result) > 0)
			// 	{
			// 	    while($row = mysqli_fetch_assoc($facultycount_result))
			// 	        $facultycount_value++;
		 //    	}

			// 	echo "Number of Faculty Members: " . $facultycount_value . "<br>";

			// 	$dateStamp_faculty = date("Ymd");
			// 	$insertFacultycount_sql = "INSERT INTO faculty_statistics (`value`, `date`) values (" . $facultycount_value .  ", " . $dateStamp_faculty . ")";
			// 	$insertFacultycount_result = mysqli_query($GLOBALS["conn"], $insertFacultycount_sql);
			// }

			/*
				This function counts all the news that are
				posted on the site.

				@parameters: None
				@return: None
			*/
			// function countNews()
			// {
			// 	$newscount_value = 0;
			// 	$newscount_sql = "SELECT * FROM news";
			// 	$newscount_result = mysqli_query($GLOBALS["conn"], $newscount_sql);
			// 	if (mysqli_num_rows($newscount_result) > 0)
			// 	{
			// 	    while($row = mysqli_fetch_assoc($newscount_result))
			// 	        $newscount_value++;
		 //    	}

			// 	echo "Number of News Posted: " . $newscount_value . "<br>";

			// 	$dateStamp_news = date("Ymd");
			// 	$insertNewscount_sql = "INSERT INTO news_statistics (`value`, `date`) values (" . $newscount_value .  ", " . $dateStamp_news . ")";
			// 	$insertNewscount_result = mysqli_query($GLOBALS["conn"], $insertNewscount_sql);
			
			// }

			/*
				This function counts all the events that are
				posted on the site.

				@parameters: None
				@return: None
			*/
			// function countEvents()
			// {
			// 	$eventcount_value = 0;
			// 	$eventcount_sql = "SELECT * FROM event";
			// 	$eventcount_result = mysqli_query($GLOBALS["conn"], $eventcount_sql);
			// 	if (mysqli_num_rows($eventcount_result) > 0)
			// 	{
			// 	    while($row = mysqli_fetch_assoc($eventcount_result))
			// 	        $eventcount_value++;
		 //    	}

			// 	echo "Number of Events Posted: " . $eventcount_value . "<br>";

			// 	$dateStamp_events = date("Ymd");
			// 	$insertEventcount_sql = "INSERT INTO event_statistics (`value`, `date`) values (" . $eventcount_value .  ", " . $dateStamp_events . ")";
			// 	$insertEventcount_result = mysqli_query($GLOBALS["conn"], $insertEventcount_sql);
			// }

			/*
				This function counts all advisers and
				all advisees assigned to them

				@parameters: None
				@return: None
			*/
			// function countAdvisees()
			// {
			// 	echo "<h3>Advisers Statistics</h3>";

			// 	$advisers_sql = "SELECT * from faculty";
			// 	$advisers_result = mysqli_query($GLOBALS["conn"], $advisers_sql);
			// 	if (mysqli_num_rows($advisers_result) > 0)
			// 	{
			// 		echo "<table>";
			// 		echo "<tr>";
			// 		echo "<th>Adviser</th>";
			// 		echo "<th>Number of Advisees</th>";
			// 		echo "</tr>";

			// 		while($row_adviser = mysqli_fetch_assoc($advisers_result))
			// 		{
			// 			echo "<tr>";
			// 			echo "<tr>";
			// 			echo "<td>" . $row_adviser["last_name"] . " " . $row_adviser["first_name"] . "</td>";

			// 			$advisees_sql = "SELECT COUNT(*) as adviseeCount from students WHERE faculty_id='" . $row_adviser["faculty_id"] . "'";
			// 			$advisees_result = mysqli_query($GLOBALS["conn"], $advisees_sql);
			// 			if(mysqli_num_rows($advisees_result) > 0)
			// 			{
			// 				$row_advisee = mysqli_fetch_assoc($advisees_result);
			// 				echo "<td>" . $row_advisee["adviseeCount"] . "</td>";
			// 			}
			// 			else
			// 			{
			// 				echo "<td>Not an adviser</td>";
			// 			}

			// 			echo "</tr>";
			// 		}

			// 		echo "</table>";
			// 	}
			// 	else
			// 	{
			// 		echo "0 Results<br>";
			// 	}
			// }

			/*
				This function fetches the 5 most recent
				statistics from the user_statistics table

				@parameters: None
				@return: None
			*/
			// function fetchUSerStatistics()
			// {
			// 	echo "<h3>User Statistics</h3>";
			// 	echo "<table>";
			// 	echo "<tr>";
			// 	echo "<th>DATE</th>";
			// 	echo "<th>VALUE</th>";
			// 	echo "</tr>";

			// 	$fetch_userStatistics_sql = "SELECT * FROM user_statistics ORDER BY date DESC LIMIT 10";
			// 	$fetch_userStatistics_result = mysqli_query($GLOBALS["conn"], $fetch_userStatistics_sql);
			// 	if (mysqli_num_rows($fetch_userStatistics_result) > 0)
			// 	{
			// 		while ($row = mysqli_fetch_assoc($fetch_userStatistics_result))
			// 		{
			// 			echo "<tr>";
			// 			echo "<td>" . $row["date"] .  "</td>";
			// 			echo "<td>" . $row["value"] . "</td>";
			// 			echo "</tr>";
			// 		}
			// 	}

			// 	echo "</table><br>";
			// }

			/*
				This function fetches the 5 most recent
				statistics from the student_statistics table

				@parameters: None
				@return: None
			*/
			// function fetchStudentStatistics()
			// {
			// 	echo "<h3>Student Statistics</h3>";
			// 	echo "<table>";
			// 	echo "<tr>";
			// 	echo "<th>DATE</th>";
			// 	echo "<th>VALUE</th>";
			// 	echo "</tr>";

			// 	$fetch_studentStatistics_sql = "SELECT * FROM student_statistics ORDER BY date DESC LIMIT 10";
			// 	$fetch_studentStatistics_result = mysqli_query($GLOBALS["conn"], $fetch_studentStatistics_sql);
			// 	if (mysqli_num_rows($fetch_studentStatistics_result) > 0)
			// 	{
			// 		while ($row = mysqli_fetch_assoc($fetch_studentStatistics_result))
			// 		{
			// 			echo "<tr>";
			// 			echo "<td>" . $row["date"] .  "</td>";
			// 			echo "<td>" . $row["value"] . "</td>";
			// 			echo "</tr>";
			// 		}
			// 	}

			// 	echo "</table><br>";
			// }

			/*
				This function fetches the 5 most recent
				statistics from the faculty_statistics table

				@parameters: None
				@return: None
			*/
			// function fetchFacultyStatistics()
			// {
			// 	echo "<h3>Faculty Statistics</h3>";
			// 	echo "<table>";
			// 	echo "<tr>";
			// 	echo "<th>DATE</th>";
			// 	echo "<th>VALUE</th>";
			// 	echo "</tr>";

			// 	$fetch_facultyStatistics_sql = "SELECT * FROM faculty_statistics ORDER BY date DESC LIMIT 10";
			// 	$fetch_facultyStatistics_result = mysqli_query($GLOBALS["conn"], $fetch_facultyStatistics_sql);
			// 	if (mysqli_num_rows($fetch_facultyStatistics_result) > 0)
			// 	{
			// 		while ($row = mysqli_fetch_assoc($fetch_facultyStatistics_result))
			// 		{
			// 			echo "<tr>";
			// 			echo "<td>" . $row["date"] .  "</td>";
			// 			echo "<td>" . $row["value"] . "</td>";
			// 			echo "</tr>";
			// 		}
			// 	}

			// 	echo "</table><br>";
			// }

			/*
				This function fetches the 5 most recent
				statistics from the event_statistics table

				@parameters: None
				@return: None
			*/
			// function fetchEventStatistics()
			// {
			// 	echo "<h3>Event Statistics</h3>";
			// 	echo "<table>";
			// 	echo "<tr>";
			// 	echo "<th>DATE</th>";
			// 	echo "<th>VALUE</th>";
			// 	echo "</tr>";

			// 	$fetch_eventStatistics_sql = "SELECT * FROM event_statistics ORDER BY date DESC LIMIT 10";
			// 	$fetch_eventStatistics_result = mysqli_query($GLOBALS["conn"], $fetch_eventStatistics_sql);
			// 	if (mysqli_num_rows($fetch_eventStatistics_result) > 0)
			// 	{
			// 		while ($row = mysqli_fetch_assoc($fetch_eventStatistics_result))
			// 		{
			// 			echo "<tr>";
			// 			echo "<td>" . $row["date"] .  "</td>";
			// 			echo "<td>" . $row["value"] . "</td>";
			// 			echo "</tr>";
			// 		}
			// 	}

			// 	echo "</table><br>";
			// }

			// function fetchNewsStatistics()
			// {
			// 	echo "<h3>News Statistics</h3>";
			// 	echo "<table>";
			// 	echo "<tr>";
			// 	echo "<th>DATE</th>";
			// 	echo "<th>VALUE</th>";
			// 	echo "</tr>";

			// 	$fetch_newsStatistics_sql = "SELECT * FROM news_statistics ORDER BY date DESC LIMIT 10";
			// 	$fetch_newsStatistics_result = mysqli_query($GLOBALS["conn"], $fetch_newsStatistics_sql);
			// 	if(mysqli_num_rows($fetch_newsStatistics_result) > 0)
			// 	{
			// 		while($row = mysqli_fetch_assoc($fetch_newsStatistics_result))
			// 		{
			// 			echo "<tr>";
			// 			echo "<td>" . $row["date"] .  "</td>";
			// 			echo "<td>" . $row["value"] . "</td>";
			// 			echo "</tr>";
			// 		}
			// 	}

			// 	echo "</table><br>";
			// }


			//--------------------------------------------------Connect DB---------------------------------------------------
			// $servername = "localhost";
			// $username = "root";
			// $password = "root";
			// $dbname = "dcs_project";

			// // Create connection
			// $conn = new mysqli($servername, $username, $password, $dbname);

			// // Check connection
			// if ($conn->connect_error) {
			//     die("Connection failed: " . $conn->connect_error);
			// } 
			//--------------------------------------------------Main Program---------------------------------------------------
			//Count/Update Statistics
			// countUsers();
			// countStudents();
			// countFaculty();
			// countNews();
			// countEvents();
		// 	countAdvisees();

		// 	//Fetch Statistics
		// 	fetchUSerStatistics();
		// 	fetchStudentStatistics();
		// 	fetchFacultyStatistics();
		// 	fetchEventStatistics();
		// 	fetchNewsStatistics();