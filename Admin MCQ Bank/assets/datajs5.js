/*loader*/
$(window).on('load',function(){
	$('.loader-wraper').fadeOut(700);

});
/*loader ends*/

$(document).ready(function(){

	$('#btn').on('click',function(){
		var sub=$('#cat').val();
		$.ajax({
			url:"insert_subject.php",
			type:"POST",
			data:{subject:sub},
			success:function(data){
				if (data==1) {
					alert('data is already added');
				}else if (data==2) {
					loadsubjecttable();
				}else{
					alert('something went wrong');
				}
			}
		})
	})
/*	delete category */
	$(document).on('click','#dbtn',function(){
		var id=$(this).data('did');
		$.ajax({
			url:"delete_cat.php",
			type:"POST",
			data:{did:id},
			success:function(data){
				if (data==1) {
					loadcat();
					loadsubjecttable();

				}else{
					alert('something went wrong');
				}
			}
		});
	});
/*delete category ends*/
/*edit category*/
	$(document).on('click','#esubmit',function(){
		var subid=$('#subid').val();
		var sub=$('#sub').val();
		$.ajax({
			url:"update-sub.php",
			type:"POST",
			data:{id:subid,
					subject:sub},
			success:function(data){
				if (data==1) {
					loadcat();
					loadsubjecttable();
					$('#edit_cat_box').hide();
				}else{
					alert('something went wrong'+data);
				}
			}
		})
	});
	$('#close-bt').on('click',function(){
		$('#edit_cat_box').hide();
	});
	$(document).on('click','#ebtn',function(){
		$('#edit_cat_box').show();
		var id=$(this).data('eid');
		$.ajax({
			url:"editcat.php",
			type:"POST",
			data:{cid:id},
			success:function(data){
				$('#edit_cat_box_form table').html(data);
			}
		});
	});
/*edit category ends*/
	var sid;
	var sname;
	function loadcat(){
		$.ajax({
			url:"load-cat.php",
			type:"POST",
			success:function(data){
				$('#table-cat').html(data);
			}
		});
	}
	loadcat();
	$(document).on('click','#btnnnn',function(e){
		$('#scat').hide();
		sid=$(this).data('id');
		sname=$(this).data('name');
		loadtablequesincat(sid,sname);
		});
		function loadtablequesincat(sid,sname){
			$.ajax({
				url:"ajax-load-sub-id-wise.php",
				type:"POST",
				data:{id:sid,name:sname},
				success:function(data){
				$("#category-table-section").html(data);
				}
			});
		}

		function loadcategories(){
			$.ajax({
				url:"ajax-load-categories.php",
				type:"POST",
				success:function(data){
				$('#nav').html(data);
				
				}	
			});
		}
		loadcategories();

		function loadselecteddata(){
			$.ajax({
				url:"ajax-load-selected-opt.php",
				type:"POST",
				success:function(data){
					$('#subb').append(data);
				}
			});
		}

	/*updating data after edit*/
	$(document).on('click','#bttnnn',function(e){
		e.preventDefault();
				var QID=$('#id').val();
		var subject=$('#subb').val();
		var Q=$('#Question').val();
		var o1=$('#opt1').val();
		var o2=$('#opt-2').val();
		var o3=$('#opt-3').val();
		var o4=$('#opt-4').val();
		var co=$('#copt').val();
		alert("hidden id: "+QID+"sub id: "+subject+"Question: "+Q+"option1: "+o1+
		"option2: "+o2+"option3: "+o3+"option4: "+o4+"correct_opttion"+co);
		$.ajax({
			url: 'ajax-update-data.php',
			type: 'POST',
			data :{
					id:QID,
					sub:subject,
					Ques:Q,
					opt1:o1,
					opt2:o2,
					opt3:o3,
					opt4:o4,
					copt:co
					},
					success:function(data){
						if (data=='1') {
							$('#model').hide();
							loadtable();
							loadtablequesincat(sid,sname);

						$('#msg').html('<p>record updated successfully</p>');

						}else{
							alert('failed'+data)
						}
						
					}
		});
	});
	$(document).on('click','.editbtnn',function(){
		$('#model').show();
		var QID=$(this).data("eid");
		$.ajax({
			url:'ajax-update.php',
			type:'POST',
			data:{id:QID},
			success:function(data){
				$('#model-form table').html(data);
				loadselecteddata();
			}
		});
	});
	$('#close-btn',).on('click',function(){
		$('#model').hide();
	});
	$('#checkbtn').on('click',function(){
		$(this).css('border','5px solid gray');
		$('#cancelbtn').css('border','5px solid gray');
	});

		$(document).on('click','.btnn',function(){
					var id=$(this).data('id');
					$.ajax({
						url:'delete_q.php',
						type:'POST',
						data:{Qid:id},
						success:function(data){
								if(data==1){
									loadtable();
									loadtablequesincat(sid,sname);
									$('#msg').text('record deleted successfully');
									
								}else{
									alert("failed to delete record"+data);
								}
						}
					})
			});
	function loadtable(){
		$.ajax({
			url:"ajax-load.php",
			type:"POST",
			success:function(data){
				$('#table-body').html(data);

			}
		});
	}
	function loadsubjecttable(){
		$.ajax({
			url:"load-ajax-subject.php",
			type:"POST",
			success:function(data){
				$('#table-subject').html(data);
			}
		});
	}
	loadsubjecttable();
	loadtable();
	function loaddata(){
		$.ajax({
				url:"ajax-load-opt.php",
				type:"POST",
				success:function(data){
				$('#sub').append(data);
				}
			});
	}

		loaddata();
			$('#bttn').on('click',function(){
				var sub=$('#sub').val();
				var ques=$('#question').val();
				var o1=$('#opt_1').val();
				var o2=$('#opt2').val();
				var o3=$('#opt3').val();
				var o4=$('#opt4').val();
				var correcto=$('#correct_opttion').val();
				if(sub!="" && ques!="" && o1!="" && o2!="" && o3!="" && o4!="" && correcto!=""){
					$.ajax({
						url:'ajax-insertQ.php',
						type:'POST',
						data:{Subject:sub,
							Question:ques,
							option1:o1,
							option2:o2,
							option3:o3,
							option4:o4,
							correct_opttion:correcto
						},
						success:function(data){
							if(data==1){
								loadtable();
								alert('record is already inserted');
							}else if(data==2){
								loadtable();
								$('#msg').text('Question added successfully');
								$("#add_ques_Form").trigger("reset");
							}
							else{
								alert('data insertion failed'+data);
							}
						}
					});
				}else{
					alert('please fill form correctly');
				}
			});
			$("#search").on("keyup",function(){
			var term=$(this).val();
			$.ajax({
				url:"ajax-live-search.php",
				type:"POST",
				data:{val:term},
				success:function(data){
					$("#table-body").html(data);
				}
			});
	});
			$("#search").on("keyup",function(){
				$("#searchbtn").hide();
			});
			$("#search").off("keyup",function(){
				$("#searchbtn").show();
			})
	});
