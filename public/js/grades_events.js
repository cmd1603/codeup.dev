
'use strict';

var student = {
    awesomeGrade: 80,
    name: null,
    subjects: [],
    calculateAverage: function () {
        var average = 0;
        this.subjects.forEach(function (subject) {
            average += subject.grade;
        });
        return average / this.subjects.length;
    },
    addSubject: function (name, grade) {
        var subject = {
            name: name,
            grade: grade
        };
        this.subjects.push(subject);
    },
    isAwesome: function () {
        return this.calculateAverage() > this.awesomeGrade;
    }
}

var save = document.getElementById('save-name');
var addAndContinue = document.getElementById('add-grade');
var addAndCalculateAverage = document.getElementById('calculate-average');

function saveName () {
    var studentName = document.getElementById('name');
    student.name = student.value;
    addAndContinue.removeAttribute('disabled');
    addAndCalculateAverage.removeAttribute('disabled');
    document.getElementById('student-name').innerText = student.name;
    
}

function afterSave(event) {
    var subjectName = document.getElementById('subject');
    var subjectGrade = document.getElementById('grade');

    student.addSubject(subjectName.value, parseInt(subjectGrade.value));

    var tableBody = document.getElementById('grades');
    tableBody.innerHTML = '<tr><td>' + subjectName.value + '</td><td>' + subjectGrade.value + '</td></tr>' + tableBody.innerHTML;
 
    subjectName.value = '';
    subjectGrade.value = '';
}   

//step 1 name and button activation



//step 2 add data

function addContinue(event) {
    afterSave();
    var average = student.calculateAverage();
    document.getElementById('student-average').innerText = average;

    if (student.isAwesome()){
        document.getElementById('student-awesome').removeAttribute('class');
        document.getElementById('student-practice').setAttribute('class', 'hidden');
    }else {
        document.getElementById('student-practice').removeAttribute('class');
        document.getElementById('student-awesome').setAttribute('class', 'hidden');        
    }

    addAndContinue.setAttribute('disabled', true);
    addAndCalculateAverage.setAttribute('disabled', true);

}


save.addEventListener('click', saveName, false);

addAndContinue.addEventListener('click', afterSave, false);

addAndCalculateAverage.addEventListener('click', addContinue, false);


