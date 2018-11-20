# employee_attendance_system

This is basic online attendance system made with php, html, css3, javascript, mysql and firebase.
For the hardware we use NodeMcu and rcf522 RFID module.

# Description

A rc522 RFID module will be connected with NodeMcu.
The NodeMcu device will be connected with local wifi network and a 3.7v power supply.

Every employee of a company will have a unique valid rfid card. When he punch the rfid card to 
the rfid sensore, it will recieve signal and send required information to the firebase.
Then the information from the firebase database will be fetched into our website.

# Installation

Create a database named "attendence_system"
Download the 'attendence_system.sql' file and import it to the database.

# Instruction

To access the website, a user has to login first. 
User can add a new employee by providing required information and a unique tag collected 
from different rfid card.
User can see the employee info and their login activity by access time and date.

