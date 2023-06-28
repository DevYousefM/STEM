<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('courses')->insert([
            "course" => "Scratch Game developmen",
            "short_desc" => "Scratch is an object-oriented coding course for kids, designed to improve problem-solving skills and creative thinking.",
            "long_desc" => "Scratch is an object-oriented coding course for kids, designed to improve problem-solving skills and creative thinking. With Scratch, you can program your own interactive stories, games, and animations — and share your creations with others in the online community.",
            "category" => "Coding",
            "image_1" => "images/scratch.webp",
            "image_2" => "images/scratch-1.webp",
            "level" => "Beginner",
            "weeks_hours" => 3,
            "age" => "+6",
            "language" => "Arabic, English",
            "price" => 700,
        ]);
        DB::table('courses')->insert([
            "course" => "App Development with MIT",
            "short_desc" => "Kids will develop Apps and games for smartphones, start coding immediately, and make their first steps as digital creators.",
            "long_desc" => "Kids will develop Apps and games for smartphones, start coding immediately, and make their first steps as digital creators.

             In the App development course, students will learn the basics of coding Apps and games for smartphones. They will write code for the first time, develop and design their own unique self-made products.",
            "category" => "Coding",
            "image_1" => "images/app.webp",
            "image_2" => "images/app-1.webp",
            "level" => "Beginner",
            "weeks_hours" => 3,
            "age" => "+8",
            "language" => "Arabic, English",
            "price" => 700,
        ]);
        DB::table('courses')->insert([
            "course" => "RoboMind",
            "short_desc" => "RoboMind trains Computational Thinking By programming a virtual robot, the student is introduced to logic, automation and technology.",
            "long_desc" => "RoboMind is a program that contains a simple educational programming environment designed with a special programming language to allow beginners to learn the basics of computer science by programming a robot simulator. Moreover, it displays the graph display in graph, graph in graph display, and graph in graph display in graph.

RoboMind works in a simple scripting language consisting of a brief set of rules. In addition to the commands that make the robot perform guiding movements, the movement can be controlled by conditional commands and loops. The code also helps to move the robot in all directions while specifying additional functions that control the number of times a particular code is repeated without having to type it more than once.",
            "category" => "ROBOTICS",
            "image_1" => "images/robomind.webp",
            "image_2" => "images/robomind-1.webp",
            "level" => "Beginner",
            "weeks_hours" => 3,
            "age" => "+8",
            "language" => "Arabic, English",
            "price" => 700,
        ]);
        DB::table('courses')->insert([
            "course" => "Kodu Game Lab",
            "short_desc" => "Kodu Game Lab is a 3D game development environment that is designed to teach kids basic programming principles.",
            "long_desc" => "Kodu Game Lab is a 3D game development environment that is designed to teach kids basic programming principles.

The Kodu language is designed specifically for game development and provides specialized primitives (the nouns, adjectives, and verbs of the language) derived from gaming scenarios. Programs are expressed in physical terms, using concepts like vision, hearing, and time to control character behavior. Kodu can express advanced game design concepts in a simple, direct, and intuitive manner.",
            "category" => "Coding",
            "image_1" => "images/kodu.webp",
            "image_2" => "images/kudo-1.webp",
            "level" => "Beginner",
            "weeks_hours" => 3,
            "age" => "+7",
            "language" => "Arabic, English",
            "price" => 700,
        ]);
        DB::table('courses')->insert([
            "course" => "Python Turtle",
            "short_desc" => "Turtle graphics is a popular and easy way for introducing programming to kids. Introduce beginners to turtle graphics using Python.",
            "long_desc" => "Turtle is a pre-installed Python library that enables users to create images and shapes by providing them with a virtual board. The on-screen pen you use to draw is called the turtle and that’s what gives the library its name. In short, the Python turtle library helps new programmers learn what programming with Python is like in a fun and interactive way. Turtles are mainly used to introduce children to the computer world. It’s a straightforward yet versatile way to understand Python concepts. This makes it a great way for kids to take their first steps in Python programming.

The first thing you will learn when it comes to programming with the Python turtle library is how to make the turtle move in the direction you want it to. Next, you will learn how to customize your turtle and its environment. Finally, you will learn two additional things with which you can perform some special tasks.",
            "category" => "Coding",
            "image_1" => "images/turtle.webp",
            "image_2" => "images/turtle-1.webp",
            "level" => "Beginner",
            "weeks_hours" => 3,
            "age" => "+10",
            "language" => "Arabic, English",
            "price" => 700,
        ]);
        DB::table('courses')->insert([
            "course" => "Python Programming",
            "short_desc" => "This course teaches the kid how to build a Python program with simple instructions and help him/her to learn how does the computer work.",
            "long_desc" => "This course will provide your kid with a comprehensive first exposure to the Python programming language that can provide you with a quick start in Python, or as the foundation for further learning.

The kid will learn elements of the Python 3 language and development strategies by creating a complete program that performs a wide range of operations on a variety of data types, structures, and objects, implements program logic through conditional statements and loops, structures code for reusability through functions and modules and handles error conditions",
            "category" => "Coding",
            "image_1" => "images/python.webp",
            "image_2" => "images/python-1.webp",
            "level" => "Beginner",
            "weeks_hours" => 3,
            "age" => "+10",
            "language" => "Arabic, English",
            "price" => 700,
        ]);
        DB::table('courses')->insert([
            "course" => "Web Design",
            "short_desc" => "This course explains how to create web pages using different techniques, such as HTML, CSS, JavaScript the key languages for building any website.",
            "long_desc" => "This course explains how to create web pages from scratch using different techniques, such as HTML, CSS, JavaScript the key languages for building any website. After completing our web design course, you would be able to create HTML websites yourself.

The complete course is hands-on based. A practical web design project at the end of the course will ensure that you go through website creation process by planning, creating structure, coding, using different web design software.",
            "category" => "Coding",
            "image_1" => "images/web.webp",
            "image_2" => "images/web-3.webp",
            "level" => "Beginner",
            "weeks_hours" => 3,
            "age" => "+11",
            "language" => "Arabic, English",
            "price" => 700,
        ]);
        DB::table('courses')->insert([
            "course" => "Graphic Design",
            "short_desc" => "This course teaches kids the basics of software and the main tools for designing graphics, such as logos, cards, posters, and how to deal with texts and images.",
            "long_desc" => "This course teaches kids the participants graphic design skills using Photoshop program.

learning the basics of the program and the main tools of graphic design, such as logo design cards, posters and advertisements, and how to deal with text, images and colours.
",
            "category" => "Coding",
            "image_1" => "images/graphicDesign.webp",
            "image_2" => "images/graphic.webp",
            "level" => "Beginner",
            "weeks_hours" => 3,
            "age" => "+11",
            "language" => "Arabic, English",
            "price" => 700,
        ]);
        DB::table('courses')->insert([
            "course" => "Lego Robotics",
            "short_desc" => "This course provides an introduction to robotics for students with no programming background using LEGO MINDSTORMS EV3 and Spike kits.",
            "long_desc" => "add from db",
            "category" => "ROBOTICS",
            "image_1" => "images/lego.webp",
            "image_2" => "images/lego-1.webp",
            "level" => "Beginner",
            "weeks_hours" => 3,
            "age" => "9 to 16",
            "language" => "Arabic, English",
            "price" => 700,
        ]);
        DB::table('courses')->insert([
            "course" => "Problem solving programming",
            "short_desc" => "This course teaches kids the basics of programming, including data types, control structures, and functions. They also learn about OPP concepts such as classes and objects.",
            "long_desc" => "C++ is the best programming language to start for the beginner as it is easy to use and easy for understanding the important concept of programming.

C++ helps you to understand the internal architecture of a computer, how computer stores and retrieves information.

C++ is used to develop games, desktop apps, operating systems, browsers, and so on because of its performance. After learning C++, it will be much easier to learn other programming languages like Java, Python, etc.
",
            "category" => "Coding",
            "image_1" => "images/problemSolving.webp",
            "image_2" => "images/c++1.webp",
            "level" => "Beginner",
            "weeks_hours" => 3,
            "age" => "+11",
            "language" => "Arabic, English",
            "price" => 700,
        ]);
        DB::table('courses')->insert([
            "course" => "Java",
            "short_desc" => "This course teaches kids the basics of computer programming using the Java language. Kids will have the foundational skills to build robust and scalable software applications.",
            "long_desc" => "understand what Java is, how to install Java on your personal computer, and how to start programming in Java using an Integrated Development Environment.

Teach students how to create their own programs in Java. Students will learn to code java in its native environment using Eclipse a free open source IDE. Students will code multiple programs, games and exercises to learn Java. The final projects will be using Swing to create a UI to play Tic Tac Toe and create a image shuffler puzzle.",
            "category" => "Coding",
            "image_1" => "images/java.webp",
            "image_2" => "images/java-1.webp",
            "level" => "Beginner",
            "weeks_hours" => 3,
            "age" => "+12",
            "language" => "Arabic, English",
            "price" => 700,
        ]);
        DB::table('courses')->insert([
            "course" => "Arduino",
            "short_desc" => "This course teaches kids the basics of building and programming electronic devices using the Arduino platform.The course covers concepts such as sensors, actuators, microcontrollers, digital and analog inputs and outputs.",
            "long_desc" => "This course teaches kids the basics of building and programming electronic devices using the Arduino platform.The course covers concepts such as sensors, actuators, microcontrollers, digital and analog inputs and outputs, and basic electronics.

Arduino is a popular platform used in various applications, including robotics, home automation, and Internet of Things (IoT) projects. By learning Arduino, you will have the skills to design, build, and program your own electronic devices and bring your ideas to life.",
            "category" => "ROBOTICS",
            "image_1" => "images/arduino.webp",
            "image_2" => "images/arduino-1.webp",
            "level" => "Beginner",
            "weeks_hours" => 3,
            "age" => "+10",
            "language" => "Arabic, English",
            "price" => 700,
        ]);
    }
}
