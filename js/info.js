      $(document).ready(function() {
          $('#submit').click(function() {
              var finish = true;
              for (var j = 1; j < 2; j++) {
                  if ($("#choose"+j).val() == '-1') {
                      event.preventDefault();
                      $('#error'+j).addClass('is-visible');
                      finish = false;
                  } else {
                      $('#error'+j).removeClass('is-visible');
                  }
              }



              if (!finish) {
                  alert('填写不完整,请检查!');
                  return;
              }
              // alert($('#text1').val());
              var data1, data2, data3, data4, data5, data6, data7, data8;

              if ($('#select1').val() == '')
                  data1 = $('input:radio[name="1"]:checked').val();
              else
                  data1 = $('#select1').val();

              if ($('#select2').val() == '')

                  data2 = $('input:radio[name="2"]:checked').val();
              else
                  data2 = $('#select2').val();
              if ($('#select3').val() == '')

                  data3 = $('input:radio[name="3"]:checked').val();
              else
                  data3 = $('#select3').val();
              if ($('#select4').val() == '')

                  data4 = $('input:radio[name="4"]:checked').val();
              else
                  data4 = $('#select4').val();

              if ($('#select5').val() == '')

                  data5 = $('input:radio[name="5"]:checked').val();
              else
                  data5 = $('#select5').val();
              if ($('#select6').val() == '')

                  data6 = $('input:radio[name="6"]:checked').val();
              else
                  data6 = $('#select6').val();
              if ($('#select7').val() == '')

                  data7 = $('input:radio[name="7"]:checked').val();
              else
                  data7 = $('#select7').val();
              if ($('#select8').val() == '')

                  data8 = $('input:radio[name="8"]:checked').val();
              else
                  data8 = $('#select8').val();



              $.ajax({
                  type: 'post',
                  url: 'saveInfo2.php',
                  data: {

                      answer1: data1,

                      answer2: data2,

                      answer3: data3,

                      answer4: data4,

                      answer5: data5,

                      answer6: data6,

                      answer7: data7,

                      answer8: data8,


                  },
                  dataType: 'json',
                  success: function(json) {
                      alert(json.insert);
                  },
                  error: function(XMLHttpRequest, textStatus, errorThrown) {
                      alert('登陆失败，请重试');
                  }
              });
          });
      });
