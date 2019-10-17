$(function () {

    $.validator.addMethod("valueNotEquals", function(value, element, arg){
        return arg != value;
    }, "選択してください");


    $("#nameForm").validate({
        rules: {
            todohuken: {
                valueNotEquals: "msg"
            },
	    fname: {
		required:true,
		rangelength: [1, 50]
	    },
	    lname: {
		required:true,
		rangelength: [1, 50]
	    },
	    viewcnt: {
		required:true,
		number:true,
		digits:true
	    }

        },
        messages: {
            todohuken: {
                equalTo: "選択してください"
            },
	    fname: {
		required: "必須項目です",
		rangelength:"50文字以下で入力してください"
	    },
	    lname: {
		required: "必須項目です",
		rangelength:"50文字以下で入力してください"
	    },
	    viewcnt: {
		required: "必須項目です",
		number:"数字のみ入力してください",
		digits:"数字のみ入力してください"
	    }

        },
        errorClass: "error_msg",
        wrapper: "li"
    });
});
