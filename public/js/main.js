(function($) {

  $('#bank_detail').parent().append('<ul class="list-item" id="newbank_detail" name="bank_detail"></ul>');
  $('#bank_detail option').each(function(){
      $('#newbank_detail').append('<li value="' + $(this).val() + '">'+$(this).text()+'</li>');
  });
  $('#bank_detail').remove();
  $('#newbank_detail').attr('id', 'bank_detail');
  $('#bank_detail li').first().addClass('init');
  $("#bank_detail").on("click", ".init", function() {
      $(this).closest("#bank_detail").children('li:not(.init)').toggle();
  });

  var allOptions1 = $("#bank_detail").children('li:not(.init)');
  $("#bank_detail").on("click", "li:not(.init)", function() {
      allOptions1.removeClass('selected');
      $(this).addClass('selected');
      $("#bank_detail").children('.init').html($(this).html());
      allOptions1.toggle();
  });

  $('#branch_detail').parent().append('<ul class="list-item" id="newbranch_detail" name="branch_detail"></ul>');
  $('#branch_detail option').each(function(){
      $('#newbranch_detail').append('<li value="' + $(this).val() + '">'+$(this).text()+'</li>');
  });
  $('#branch_detail').remove();
  $('#newbranch_detail').attr('id', 'branch_detail');
  $('#branch_detail li').first().addClass('init');
  $("#branch_detail").on("click", ".init", function() {
      $(this).closest("#branch_detail").children('li:not(.init)').toggle();
  });
  
  

  var allOptions2 = $("#branch_detail").children('li:not(.init)');
  $("#branch_detail").on("click", "li:not(.init)", function() {
      allOptions2.removeClass('selected');
      $(this).addClass('selected');
      $("#branch_detail").children('.init').html($(this).html());
      allOptions2.toggle();
  });

  $('#dep_detail').parent().append('<ul class="list-item" id="newdep_detail" name="dep_detail"></ul>');
  $('#dep_detail option').each(function(){
      $('#newdep_detail').append('<li value="' + $(this).val() + '">'+$(this).text()+'</li>');
  });
  $('#dep_detail').remove();
  $('#newdep_detail').attr('id', 'dep_detail');
  $('#dep_detail li').first().addClass('init');
  $("#dep_detail").on("click", ".init", function() {
      $(this).closest("#dep_detail").children('li:not(.init)').toggle();
  });
  
  

  var allOptions3 = $("#dep_detail").children('li:not(.init)');
  $("#dep_detail").on("click", "li:not(.init)", function() {
      allOptions3.removeClass('selected');
      $(this).addClass('selected');
      $("#dep_detail").children('.init').html($(this).html());
      allOptions3.toggle();
  });
  
  

  
  $('#reset').on('click', function(){
      $('#register-form').reset();
  });

  $('#register-form').validate({
    rules : {
        emp_id : {
            required: true,
        },
		first_name : {
            required: true,
        },
        last_name : {
            required: true,
        },
        company : {
            required: true
        },
        email : {
            required: true,
            email : true
        },
        phone_number : {
            required: true,
        },
		designation : {
            required: true,
        },
		add1 : {
            required: true,
        },
		add2 : {
            required: true,
        },
		accnum : {
            required: true,
        },
        username : {
            required: true,
        },
        password : {
            required: true,
        },
        password_confirmation : {
            required: true,
        },
        removeadmin : {
            required: true,
        },
        designation : {
        	required: true,

        }
    },
    onfocusout: function(element) {
        $(element).valid();
    },
});

    jQuery.extend(jQuery.validator.messages, {
        required: "",
        remote: "",
        email: "",
        url: "",
        date: "",
        dateISO: "",
        number: "",
        digits: "",
        creditcard: "",
        equalTo: ""
    });
})(jQuery);