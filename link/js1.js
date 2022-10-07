angular.module('sortApp1', [])

.controller('mainController', function($scope) {
  $scope.sortType     = 'name'; // set the default sort type
  $scope.sortReverse  = false;  // set the default sort order
  $scope.searchlink   = '';     // set the default search/filter term

  
  $scope.new = [
    { name: 'TRYHACKME', link:'https://tryhackme.com/', description: 'Learning site' },
    { name: 'HACKADAY', link:'https://hackaday.com/', description: 'Blog' },
    { name: 'TRY2HACKME', link: 'https://try2hack.me/', description: 'Learning forum' },
    { name: 'HACKER101', link: 'https://www.hacker101.com/', description: 'Learning site' },
    { name: 'CYBRARY', link: 'https://www.cybrary.it/', description: 'Learning site' },
    { name: 'ALISON', link: 'https://alison.com/', description: 'Learning site' },
    { name: 'OVERAPI', link: 'https://overapi.com/', description: 'Cheatsheet' },
    { name: 'HACKSPLANING', link: 'https://www.hacksplaining.com/', description: 'Cyber traning' },
    { name: 'ROADMAP', link: 'https://roadmap.sh/', description: 'Map for learning' },
    { name: 'DVWA', link: 'https://dvwa.co.uk/', description: 'Testing Web Application' },
    { name: 'OSINT', link: 'https://osintframework.com/', description: 'Inforamtion gathering site' },
    { name: 'PENTESTER LAB', link: 'https://pentesterlab.com/', description: 'Lab' },
    { name: 'EDX', link: 'https://www.edx.org/', description: 'Learning site' },
    { name: 'KONTRA', link: 'https://application.security/', description: 'Application testing' },
    { name: 'PORTSWIGGER', link: 'https://portswigger.net/', description: 'Web security Academy' },
    { name: 'UDEMY', link: 'https://www.udemy.com/', description: 'Learning site' },
    { name: 'JAVASCRIPT', link: 'https://javascript.info/', description: 'Javascript tutorial' },
    { name: 'HACKTHEBOX', link: 'https://www.hackthebox.com/', description: 'Lab' },
    { name: 'PROGRAMIZ', link: 'https://www.programiz.com/', description: 'Learn to code' },
    { name: 'CODESANDBOX', link: 'https://codesandbox.io/', description: 'Learn to code' },
    { name: 'CODECHEF', link: 'https://www.codechef.com/', description: 'Learn to code' },
    { name: 'LEETCODE', link: 'https://leetcode.com/', description: 'Learn to code' },
    { name: 'HACKER RANK', link: 'https://www.hackerrank.com/', description: 'Learn to code' },
    { name: 'VIRTUALBOX', link: 'https://www.virtualbox.org/', description: 'Virtualization tool' },
    { name: 'VMWARE', link: 'https://www.vmware.com/in.html', description: 'Virtualization tool' },
    { name: 'GITHUB', link: 'https://github.com/', description: 'Forum' },
    { name: 'KALI', link: 'https://www.kali.org/', description: 'Open-source OS' },
    { name: 'SHODAN', link: 'https://www.shodan.io/', description: ' Search-engine' },
    { name: 'EXPLOIT DATABASE', link: 'https://www.exploit-db.com/', description: 'Google dorks' },
    { name: 'W3SCHOOLS', link: 'https://www.w3schools.com/', description: 'Learning site' },
    { name: 'QUICKREF', link: 'https://quickref.me/', description: 'Cheatsheet' },
    { name: 'BUGMENOT', link: 'http://bugmenot.com/', description: 'Bug tool' },
    { name: 'ASANA', link: 'https://asana.com/', description: 'Project organizer' },
    { name: 'HACKER NEWS', link: 'https://news.ycombinator.com/news', description: ' News' },
    { name: 'CTFTIME', link: 'https://ctftime.org/', description: 'Events' },
    { name: 'INTIGRITI', link: 'https://www.intigriti.com/', description: 'Forum' },
    { name: 'HACKERONE', link: 'https://www.hackerone.com/', description: 'Forum' },
    { name: 'BUGCROWD', link: 'https://www.bugcrowd.com/', description: 'Forum' },
    { name: 'YESWEHACK', link: 'https://www.yeswehack.com/', description: 'Froum' },
    { name: 'INE', link: 'https://my.ine.com/', description: 'Learning site' },
    { name: 'ZAP', link: 'https://www.zaproxy.org/', description: 'Scanner tool' },
    { name: 'TUTORIALS POINT', link: 'https://www.tutorialspoint.com/index.htm', description: 'Learning site' },
    { name: 'MEDIUM', link: 'https://medium.com/', description: 'Forum' },
    { name: 'CODECADEMY', link: 'https://www.codecademy.com/', description: 'Learning site' },
    { name: 'OWASP', link: 'https://owasp.org/', description: 'Community' },
    { name: 'FREECODECAMP', link: 'https://www.freecodecamp.org/learn', description: 'Learning platform' },
    { name: 'GEEKS FOR GEEKS', link: 'https://www.geeksforgeeks.org/', description: 'Learning platform' },
    { name: 'JAVATPOINT', link: 'https://www.javatpoint.com/', description: 'Learning site' },
    { name: 'GURU99', link: 'https://www.guru99.com/', description: 'Learning platform' },
    { name: 'DATACAMP', link: 'https://www.datacamp.com/', description: 'Learning site' },
    { name: 'YANDEX', link: 'https://yandex.com/', description: 'Russian search-engine' },
    { name: 'CYBERACES', link: 'https://tutorials.cyberaces.org/', description: 'Learn cyber' },
    { name: 'COURSERA', link: 'https://www.coursera.org/in', description: 'learning platform' },
    { name: 'WHOAMI', link: 'https://www.coursera.org/in', description: 'nope' }
    //{ name: '', link: '', description: '' },
    //{ name: '', link: '', description: '' },
    //{ name: '', link: '', description: '' },
    //{ name: '', link: '', description: '' },
    //{ name: '', link: '', description: '' }


  ];
});