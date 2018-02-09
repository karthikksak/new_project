-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 13, 2017 at 09:44 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `apply`
--

CREATE TABLE IF NOT EXISTS `apply` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `sid` int(100) NOT NULL,
  `desg` varchar(100) NOT NULL,
  `apply` varchar(100) NOT NULL DEFAULT 'Applied',
  `degid` varchar(100) NOT NULL,
  `date` varchar(123) NOT NULL,
  `schedule` varchar(100) NOT NULL,
  `yes` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `apply`
--

INSERT INTO `apply` (`id`, `sid`, `desg`, `apply`, `degid`, `date`, `schedule`, `yes`) VALUES
(1, 2, 'Graphics Designer', 'applied', '4', '2017-03-06', '2017-03-08', 'yes'),
(2, 2, 'Devops Engineer', 'applied', '5', '2017-03-06', '2017-03-16', 'yes'),
(5, 2, 'Graphics Designer', 'applied', '4', '2017-03-06', '2017-03-06', 'yes'),
(6, 2, 'Ui Designer', 'applied', '3', '2017-03-06', '2017-03-13', 'yes'),
(7, 2, 'Android Developer', 'applied', '7', '2017-03-07', '2017-03-13', 'yes'),
(8, 2, 'Software Analytic', 'applied', '2', '2017-03-13', '2017-03-15', 'yes'),
(9, 4, 'Android Developer', 'applied', '8', '2017-03-13', '2017-03-22', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `fname` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `com` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `fname`, `mail`, `phone`, `com`) VALUES
(1, 'karthik', 'karthikjudu@yahoo.com', '9500678830', 'Its very helpful');

-- --------------------------------------------------------

--
-- Table structure for table `gen`
--

CREATE TABLE IF NOT EXISTS `gen` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `tests` varchar(100) NOT NULL,
  `que` varchar(300) NOT NULL,
  `option1` varchar(200) NOT NULL,
  `option2` varchar(200) NOT NULL,
  `option3` varchar(200) NOT NULL,
  `option4` varchar(200) NOT NULL,
  `answers` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Dumping data for table `gen`
--

INSERT INTO `gen` (`id`, `tests`, `que`, `option1`, `option2`, `option3`, `option4`, `answers`) VALUES
(1, 'Aptitude', 'what is a percent of b divided by b percent of a?', 'a', '1', '0', 'b', '1'),
(2, 'Aptitude', 'What was the day of the week on 28th May, 2006?', 'Thursday', 'Friday	', 'Sunday	', 'Saturday', '3'),
(3, 'Aptitude', 'The last day of a century cannot be?', 'Monday	', 'Tuesday	', 'Friday	', 'Wednesday', '2'),
(4, 'Aptitude', 'The average of first 10 even numbers is?', '18	', '22	', '9	', '11', '4'),
(5, 'Aptitude', 'The greatest number of four digits which is divisible by 15, 25, 40 and 75 is:', '9000\r\n', '9400\r\n', '9600', '9800\r\n', '3'),
(6, 'Aptitude', 'The product of two numbers is 9375 and the quotient, when the larger one is divided by the smaller, is 15. The sum of the numbers is:', '380\r\n', '395', '400\r\n', '425\r\n', '3'),
(7, 'Aptitude', 'Present ages of Sameer and Anand are in the ratio of 5 : 4 respectively. Three years hence, the ratio of their ages will become 11 : 9 respectively. What is Anand present age in years?', '24', '27', '40', 'None of these\r\n', '1'),
(8, 'Aptitude', 'Some articles were bought at 6 articles for Rs. 5 and sold at 5 articles for Rs. 6. Gain percent is:', '30%\r\n', '33 1/3%\r\n', '35%\r\n', '44%\r\n', '4'),
(9, 'Aptitude', '66 cubic centimetres of silver is drawn into a wire 1 mm in diameter. The length of the wire in metres will be:', '84', '90', '168', '336', '1'),
(10, 'Aptitude', 'How many times in a day, are the hands of a clock in straight line but opposite in direction?', '20\r\n', '22', '24', '48', '2'),
(11, 'Aptitude', 'The true discount on a bill due 9 months hence at 16% per annum is Rs. 189. The amount of the bill is:', 'Rs.1386\r\n', 'Rs.1764\r\n', 'Rs.1575', 'Rs.2268\r\n', '2'),
(12, 'Aptitude', 'Find the odd man out.\r\n41, 43, 47, 53, 61, 71, 73, 81', '61', '71', '73', '81', '4'),
(13, 'C&C++', 'Which of the following type of class allows only one object of it to be created?', 'Virtual class\r\n', 'Abstract class\r\n', 'Singleton class\r\n', 'Friend class', '3'),
(14, 'C&C++', 'Which of the following statements is correct?', 'Base class pointer cannot point to derived class.', 'Derived class pointer cannot point to base class.', 'Pointer to derived class cannot be created.', 'Pointer to base class cannot be created.', '2'),
(15, 'C&C++', 'Which of the following is not the member of class?', 'Static function', 'Friend function', 'Const function', 'Virtual function', '2'),
(16, 'C&C++', 'In which order do the following gets evaluated\r\n1.Relational\r\n2.Arithmetic\r\n3.Logical\r\n4.Assignment\r\n', '2134\r\n', '1234\r\n', '4321', '3214', '1'),
(17, 'C&C++', 'Declare the following statement?\r\n"A pointer to a function which receives nothing and returns nothing".', 'void *(ptr)*int;', 'void *(*ptr)()', 'void *(*ptr)(*)', 'void (*ptr)()', '4'),
(18, 'C&C++', 'What will be the output of the program?\r\n#include<stdio.h>\r\n\r\nint addmult(int ii, int jj)\r\n{\r\n    int kk, ll;\r\n    kk = ii + jj;\r\n    ll = ii * jj;\r\n    return (kk, ll);\r\n}\r\n\r\nint main()\r\n{\r\n    int i=3, j=4, k, l;\r\n    k = addmult(i, j);\r\n    l = addmult(i, j);\r\n    printf("%d %d", k, l);\r\n    ret', '12 12', 'No error, No output\r\n', 'Error: compile error', 'None of above', '1'),
(19, 'C&C++', 'consider the following program and what will be content of t?\r\n#include<stdio.h>\r\n\r\nint main()\r\n{\r\n    FILE *fp;\r\n    int t;\r\n    fp = fopen("DUMMY.C", "w");\r\n    t = fileno(fp);\r\n    printf("%d\r\n", t);\r\n    return 0;\r\n}', 'size of "DUMMY.C" file', 'The handle associated with "DUMMY.C" file', 'Garbage value', 'Error in fileno()', '2'),
(20, 'C&C++', 'According to ANSI specifications which is the correct way of declaring main when it receives command-line arguments?', 'int main(int argc, char *argv[])', 'int main(argc, argv)\r\nint argc; char *argv;', 'int main()\r\n{\r\n    int argc; char *argv;\r\n}', 'None of above\r\n', '1'),
(21, 'C&C++', 'Which of the following function prototype is perfectly acceptable?', 'int Function(int Tmp = Show());', 'float Function(int Tmp = Show(int, float));', 'Both A and B.', 'float = Show(int, float) Function(Tmp);', '1'),
(22, 'C&C++', 'For automatic objects, constructors and destructors are called each time the objects', 'enter and leave scope', 'enter and leave scope', 'are constructed', 'are destroyed', '1'),
(23, 'Java', 'Which is a reserved word in the Java programming language?', 'method', 'native', 'subclasses', 'reference', '2'),
(24, 'Java', 'Which is a valid keyword in java?', 'interface', 'string', 'Float', 'unsigned', '1'),
(25, 'Java', 'What will be the output of the program?\r\nclass Test \r\n{\r\n    public static void main(String [] args) \r\n    {\r\n        Test p = new Test();\r\n        p.start();\r\n    }\r\n\r\n    void start() \r\n    {\r\n        boolean b1 = false;\r\n        boolean b2 = fix(b1);\r\n        System.out.println(b1 + " " + b2);\r\n ', 'true true', 'false true', 'true false', 'false false', '2'),
(26, 'Java', 'What will be the output of the program?\r\nclass BitShift \r\n{\r\n    public static void main(String [] args) \r\n    {\r\n        int x = 0x80000000;\r\n        System.out.print(x + " and  ");\r\n        x = x >>> 31;\r\n        System.out.println(x);\r\n    }\r\n}', '0x80000000 and 0x00000001', '-2147483648 and -1', '-2147483648 and 1', '1 and -2147483648', '3'),
(27, 'Java', 'What will be the output of the program?\r\nclass Equals \r\n{\r\n    public static void main(String [] args) \r\n    {\r\n        int x = 100;\r\n        double y = 100.1;\r\n        boolean b = (x = y); /* Line 7 */\r\n        System.out.println(b);\r\n    }\r\n}', 'true', 'false', 'Compilation fails', 'An exception is thrown at runtime', '3'),
(28, 'Java', '	\r\nWhat will be the output of the program?\r\ntry \r\n{ \r\n    int x = 0; \r\n    int y = 5 / x; \r\n} \r\ncatch (Exception e) \r\n{\r\n    System.out.println("Exception"); \r\n} \r\ncatch (ArithmeticException ae) \r\n{\r\n    System.out.println(" Arithmetic Exception"); \r\n} \r\nSystem.out.println("finished");', 'finished', 'Exception', 'Arithmetic Exception', 'Compilation fails.', '4'),
(29, 'Java', 'class X implements Runnable \r\n{ \r\n    public static void main(String args[]) \r\n    {\r\n        /* Missing code? */\r\n    } \r\n    public void run() {} \r\n}\r\nWhich of the following line of code is suitable to start a thread ?', 'Thread t = new Thread(X);', 'X run = new X(); Thread t = new Thread(run); t.start();', 'Thread t = new Thread(X); t.start();', 'Thread t = new Thread(); x.run();', '2'),
(30, 'Java', 'Which interface does java.util.Hashtable implement?', 'Java.util.Map', 'Java.util.List', 'Java.util.HashTable', 'Java.util.Collection', '1'),
(31, 'Java', 'Which is valid declaration of a float?', 'float f = 1F;', 'float f = 1.0;', 'float f = "1";', 'float f = 1.0d;', '1'),
(32, 'Java', '	\r\nWhat will be the output of the program (when you run with the -ea option) ?\r\npublic class Test \r\n{  \r\n    public static void main(String[] args) \r\n    {\r\n        int x = 0;  \r\n        assert (x > 0) : "assertion failed"; /* Line 6 */\r\n        System.out.println("finished"); \r\n    } \r\n}', 'finished', 'Compilation fails.', 'An AssertionError is thrown.', 'An AssertionError is thrown and finished is output.', '3'),
(33, 'Php&MySql', 'What is the use of mysql_pconnect()?', 'Used to connect to mysql server', 'Used to create a persistant connection to mysql server.', 'Used to return an identifier of an existing open connection before opening new connection', 'Both b and c', '4'),
(34, 'Php&MySql', 'What is array_keys() used for?', 'Compares array keys, and returns the matches', 'Checks if the specified key exists in the array', 'Returns all the keys of an array', 'Both b and c', '3'),
(35, 'Php&MySql', 'Who is the father of PHP?', 'Rasmus Lerdorf', 'Drek Kolkevi', 'Willam Makepiece', 'List Barely', '1'),
(36, 'Php&MySql', 'Which of the following PHP functions can be used to get the current memory usage?', 'get_usage()', 'get_peak_usage()', 'get_memory_usage()', 'get_memory_peak_usage()', '3'),
(37, 'Php&MySql', 'Which in-built function will add a value to the end of an array?', 'array_unshift()', ' into_array()', 'inend_array()', 'array_push()', '4'),
(38, 'Php&MySql', 'What will be the output of the following PHP code?\r\n< ?php \r\n    $number = array ("4", "hello", 2);\r\n    echo (array_sum ($number));\r\n?>', '4hello2', '2', '4', '6', '4'),
(39, 'Php&MySql', 'Which one of the following regular expression matches any string containing zero or one p?\r\n', 'p+', ' p*', 'P?', 'p#', '3'),
(40, 'Php&MySql', 'How many error levels are available in PHP?', '16', '15', '17', '18', '1'),
(41, 'Php&MySql', ' Which one of the following statements can be used to select the database?', '$mysqli=select_db(â€˜databasenameâ€™);', ' mysqli=select_db(â€˜databasenameâ€™);', 'mysqli->select_db(â€˜databasenameâ€™);', '$mysqli->select_db(â€˜databasenameâ€™);', '4'),
(42, 'Php&MySql', 'Which one of the following methods is used to recuperating prepared statements resources?', 'end()', 'close()', 'final()', 'finish()', '2'),
(43, 'Android', 'On which thread broadcast receivers will work in android?', 'Worker Thread', 'Main Thread', 'Activity Thread', 'None of the Above', '2'),
(44, 'Android', 'How many broadcast receivers are available in android?', 'sendIntent()', 'onRecieve()', 'implicitBroadcast()', 'sendBroadcast(),sendOrderBroadcast(),and sendStickyBroadcast().', '4'),
(45, 'Android', 'What is the package name of JSON?', 'com.json', 'in.json', 'org.json', 'com.android.JSON', '3'),
(46, 'Android', 'What are the indirect Direct subclasses of Activity?', 'LauncherActivity\r\n', 'PreferenceActivity\r\n', 'TabActivity\r\n', 'All the above', '4'),
(47, 'Android', 'If you want share the data accross the all applications ,you should go for?', 'Shared Preferences\r\n', 'Internal Storage\r\n', 'SQLite Databases\r\n', 'content provider', '4'),
(48, 'Android', 'Which one is NOT related to fragment class?', 'DialogFragment\r\n\r\n', 'PreferenceFragment\r\n', 'CursorFragment', 'ListFragment', '3');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE IF NOT EXISTS `job` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `aname` varchar(200) NOT NULL,
  `pass` int(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id`, `aname`, `pass`) VALUES
(1, 'karthik', 31);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `notify` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `notification`
--


-- --------------------------------------------------------

--
-- Table structure for table `pass`
--

CREATE TABLE IF NOT EXISTS `pass` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `uid` int(100) NOT NULL,
  `score` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pass`
--

INSERT INTO `pass` (`id`, `uid`, `score`, `pass`) VALUES
(1, 2, '6', 'Pass');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `desg` varchar(100) NOT NULL,
  `desc1` varchar(10000) NOT NULL,
  `skill` varchar(200) NOT NULL,
  `datetime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `desg`, `desc1`, `skill`, `datetime`) VALUES
(1, 'Php Developer', 'Infosys', 'Corephp,Html5,Css3,Bootstrap,Jquery,Mysql', '2017-03-15 10:23:32'),
(2, 'Software Analytic', 'Company Name:HCL\r\nDate And Time:24/03/2017 & 10.00 A.M to 05.00 P.M', 'Problem solving and problem reduction skills,Interpersonal relation skills,Working knowledge of software technology', '2017-03-15 11:25:56'),
(3, 'Ui Designer', 'Company Name:Cegonsoft\r\nInterview Date:22/04/2017\r\nLocation:coimbatore', 'Html5,Css3,Jquery,Javascript,Bootstrap', '2017-03-16 13:33:45'),
(4, 'Graphics Designer', 'Company Name:Infosys', 'Photoshop,Creativity,Basic Html & Css', '2017-02-18 10:07:01'),
(5, 'Devops Engineer', 'Company:Indmax It Services Pvt Ltd\r\n', 'Real Cloud Experience, C+, C++, .NET, ASP,JavaScript, Python ', '2017-02-20 08:24:53'),
(6, 'Dot Net', 'Company:infosys', 'ASP.NET MVC, AJAX,MongoDB', '2017-02-23 10:19:19'),
(7, 'Android Developer', 'Company Name:Winfoglobal Technologies Pvt Ltd\r\n', 'required skill:JAVA,ANDROID SDK,ANDROID STUDIO,APIS,DATABASES', '2017-02-27 05:56:10'),
(8, 'Android Developer', 'Comapny name:Google', 'core,java,sdk,ecllipese,sqlite', '2017-03-02 06:53:57');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `uid` int(100) NOT NULL,
  `qid` int(100) NOT NULL,
  `ans1` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `uid`, `qid`, `ans1`) VALUES
(1, 2, 12, '4'),
(2, 2, 10, '3'),
(3, 2, 6, '4'),
(4, 2, 7, '1'),
(5, 2, 2, '3'),
(6, 2, 9, '4'),
(7, 2, 11, '2'),
(8, 2, 1, '1'),
(9, 2, 8, '4'),
(10, 2, 4, '3');

-- --------------------------------------------------------

--
-- Table structure for table `result1`
--

CREATE TABLE IF NOT EXISTS `result1` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `uid` int(100) NOT NULL,
  `qid` int(100) NOT NULL,
  `ans1` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `result1`
--

INSERT INTO `result1` (`id`, `uid`, `qid`, `ans1`) VALUES
(1, 2, 22, '2'),
(2, 2, 15, '2'),
(3, 2, 17, '2'),
(4, 2, 21, '2'),
(5, 2, 18, '1'),
(6, 2, 16, '1'),
(7, 2, 20, '3'),
(8, 2, 19, '1'),
(9, 2, 13, '2'),
(10, 2, 14, '1');

-- --------------------------------------------------------

--
-- Table structure for table `tpass`
--

CREATE TABLE IF NOT EXISTS `tpass` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `uid` int(100) NOT NULL,
  `score` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `test` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tpass`
--

INSERT INTO `tpass` (`id`, `uid`, `score`, `pass`, `test`) VALUES
(1, 2, '3', 'Fail', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `fname` varchar(200) NOT NULL,
  `mname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `pwd` varchar(200) NOT NULL,
  `dob` date NOT NULL,
  `addr` varchar(200) NOT NULL,
  `inst` varchar(200) NOT NULL,
  `coname` varchar(200) NOT NULL,
  `cgpa` float(20,2) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `lang` varchar(200) NOT NULL,
  `country` varchar(100) NOT NULL,
  `cv` varchar(200) NOT NULL,
  `pic` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `mname`, `lname`, `email`, `pwd`, `dob`, `addr`, `inst`, `coname`, `cgpa`, `mobile`, `gender`, `lang`, `country`, `cv`, `pic`) VALUES
(1, 'Karthik', '', 'J G', 'karthikit.ksak@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '1995-03-14', '40,Periyar street,Thirunagar,\r\nMadurai-625006', 'KLN College Of Information Technology', 'B.Tech(IT)', 6.67, '8754003604', 'male', 'tamil,english', 'India', '56518-Resume.docx', ''),
(2, 'karan', 'kumar', 'm g', 'karan@gmail.com', 'db068ce9f744fbb35eedc9a883f91085', '2017-02-28', 'madurai', '', '', 0.00, '', 'male', 'tamil', 'India', '73056-vivek_res.docx', '10631-Lighthouse.jpg'),
(3, 'Sophia', 'Sakharov', 'S', 'sophia143@gmail.co', '2ee0272b8e1a9705dc3ebe91c10b32f4', '1996-05-14', 'Coimbatore', 'srm university', 'B.E(EEE)', 7.80, '9585945213', 'female', 'english', 'India', '74747-Resume', '59067-Desert.jpg'),
(4, 'gao', 'mikado', 'G', 'gao@gmail.com', '6594aef67115c89f2147a70ed1316ae4', '2017-03-15', 'japan', 'smr', 'b.e', 7.20, '7845445130', 'male', 'english,hindhi', 'India', '94512-online-examination-system-sample-document.docx', '');
