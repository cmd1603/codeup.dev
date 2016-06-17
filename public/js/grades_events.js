
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

//var save = $('#save-name');
var addAndContinue = $('#add-grade');
var addAndCalculateAverage = $('#calculate-average');

function saveName() {
    console.log('saveName')
    var studentName = $('#name').val();
    // student.name = studentName.value;
    console.log(studentName);
    addAndContinue.attr('disabled');
    addAndCalculateAverage.attr('disabled');
    $('#student-name').html(student.name);
    
}

function afterSave(event) {
    var subjectName = $('#subject').val();
    var subjectGrade = $('#grade').val();

    student.addSubject(subjectName.value, parseInt(subjectGrade.value));

    var tableBody = $('#grades').val();
    tableBody.html = '<tr><td>' + subjectName.value + '</td><td>' + subjectGrade.value + '</td></tr>' + tableBody.html;
 
    //subjectName.value = '';
    //subjectGrade.value = '';
}   

//step 1 name and button activation



//step 2 add data

function addContinue(event) {
    afterSave();
    var average = student.calculateAverage();
    $('#student-average').html = average;

    if (student.isAwesome()){
        $('#student-awesome').removeAttr('class');
        $('#student-practice').attr('class', 'hidden');
    }else {
        $('#student-practice').removeAttr('class');
        $('#student-awesome').attr('class', 'hidden');        
    }

    addAndContinue.attr('disabled', true);

    addAndCalculateAverage.attr('disabled', true);

}

    addAndContinue.attr('disabled',true);
    addAndCalculateAverage.attr('disabled', true);

    $('#save-name').on('click', saveName);
    $('#subject').click(afterSave);
    $('#add-grade').click(addContinue);

// save.addEventListener('click', saveName, false);

// addAndContinue.addEventListener('click', afterSave, false);

// addAndCalculateAverage.addEventListener('click', addContinue, false);





