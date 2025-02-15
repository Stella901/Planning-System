<?php
session_start();
include("connect.php");

?>


<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="stylesheet" href="./DAMN IM TIRED/style.css" />
	<link rel="stylesheet" href="./DAMN IM TIRED/themestyle.css">
	<link rel="stylesheet" href="./DAMN IM TIRED/attachment.css">
	<title>Planning App</title>
	<meta name="description"
		content="Manage your tasks effortlessly with our JavaScript Todos List App. Organize, prioritize, and track your to-dos seamlessly using this user-friendly web application." />
	<meta name="keywords"
		content="JavaScript Todos List App, Task Management, To-Do List Web App, Organize Tasks, Track To-Dos, Simple Task Manager, Productivity Tool, User-Friendly Interface, Web-based Task Organizer, JavaScript Task Tracker" />
</head>

<body>
	<div class="wrapper">
		<div class="screen-backdrop"></div>
		<div class="home-screen screen">
			<div class="head-wrapper">
				<div class="menu-btn">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
						stroke="currentColor" class="w-6 h-6">
						<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12" />
					</svg>
				</div>
				<div class="welcome">
					<div class="content">
						<h1>Hello Tevie</h1>
						</h1>
						<p>Today you have <span id="total-tasks">13</span> tasks</p>
					</div>

					<div class="img">
						<div class="backdrop"></div>
						<img src="images/boy.png" alt="" />
					</div>
				</div>
			</div>
			<div class="categories-wrapper">
				<div class="categories">
					<div class="category">
						<div class="left">
							<img src="images/boy.png" alt="sun" />
							<div class="content">
								<h1>Personal</h1>
								<p>5 Tasks</p>
							</div>
						</div>
						<div class="options">
							<div class="toggle-btn">
								<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
									stroke="currentColor" class="w-6 h-6">
									<path stroke-linecap="round" stroke-linejoin="round"
										d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />
								</svg>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="category-screen screen">
			<div class="head-wrapper">
				<div class="back-btn">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
						stroke="currentColor" class="w-6 h-6">
						<path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
					</svg>
				</div>
				<div class="options">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
						stroke="currentColor" class="w-6 h-6">
						<path stroke-linecap="round" stroke-linejoin="round"
							d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />
					</svg>
				</div>
			</div>
			<div class="category-details">
				<img src="images/boy.png" alt="" id="category-img" />
				<div class="details">
					<p id="num-tasks">3 tasks</p>
					<h1 id="category-title">Personal</h1>
				</div>
			</div>
			<div class="tasks-wrapper">
				<div class="tasks">
					<div class="task-wrapper">
						<label for="task" class="task">
							<input type="checkbox" name="task" id="task" />
							<span class="checkmark"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
									stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
									<path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
								</svg>
							</span>
							<p>Buy a new car lorem</p>
						</label>
						<div class="delete">
							<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
								stroke="currentColor" class="w-6 h-6">
								<path stroke-linecap="round" stroke-linejoin="round"
									d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
							</svg>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="add-task-btn">
			<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
				class="w-6 h-6">
				<path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
			</svg>
		</div>
		<div class="black-backdrop"></div>
		<div class="add-task">
			<div class="add-task-backdrop"></div>
			<h1 class="heading">Add Task</h1>
			<div class="input-group">
				<label for="task-input"> Task </label>
				<input type="text" id="task-input" required />
			</div>
			<div class="input-group">
                <label for="task-date">Due Date:</label>
                <input type="date" id="task-date" name="task-date">
				<label for="category-select"> Category </label>
				<select id="category-select"></select>
			</div>
			<div class="btns">
				<button class="cancel-btn">Cancel</button>
				<button class="add-btn">Add</button>
			</div>
		</div>
	</div>


<div id="calendar-header">
	<button id="prev-month-btn">Prev</button>
    <span id="calendar-month-year"></span>
    <button id="next-month-btn">Next</button>


<div id="calendar-wrapper"> 
        <div id="calendar"></div>
	</div>
</div>


    <!-- Modal for showing tasks of selected day -->
    <div id="task-modal" class="modal">
        <div class="modal-content">
            <span id="close-modal" class="close">&times;</span>
            <h2>Tasks for the selected day</h2>
            <ul id="task-list-ul"></ul>
        </div>
    </div>


	<!-- Main Content -->
    <div class="container">
        <h2 class="titleDesign">Attachment Notes</h2>
        <ul id="attachmentList">
            <!-- Dynamically added attachments will appear here -->
        </ul>
        <input type="file" id="attachmentInput">
        <button id="addAttachmentButton">Add Attachment</button>
    </div>

    <!-- Modal -->
    <div id="imageModal" class="modal">
        <div class="modal-content">
            <span id="closeModal" class="close-button">&times;</span>
            <img id="modalImage" src="" alt="Image Preview">
        </div>
    </div>


	<div class="switchbody">
		<div class="containertheme">
			<button id="light-mode-btn" class="mode-btntheme">Light</button>
			<button id="dark-mode-btn" class="mode-btntheme">Dark</button>
		</div>
	</div>
		<script>
			// Select buttons
			const lightModeBtn = document.getElementById("light-mode-btn");
			const darkModeBtn = document.getElementById("dark-mode-btn");
	
			// Add event listeners to buttons
			lightModeBtn.addEventListener("click", () => {
				document.body.style.backgroundColor = "beige";
				document.body.style.color = "black";
			});
	
			darkModeBtn.addEventListener("click", () => {
				document.body.style.backgroundColor = "gray";
				document.body.style.color = "black";
			});
		</script>


<div style="border: solid; border-radius:10px; background-color: white; margin-bottom: 830px;">   
      <a href="logout.php">Logout</a>
    </div>





	<script src="./DAMN IM TIRED/attachment.js" type="module"></script>
	<script src="./DAMN IM TIRED/script.js" type="module"></script>


</body>

</html>