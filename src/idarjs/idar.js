function kirim(dataInput, urlnya, callBack){
  var csrfToken = $('meta[name="csrf-token"]').attr("content");
  var form = new FormData();
  form.append("validasi", "go")
  form.append("_csrf", csrfToken)
  for (var key in dataInput) {
    form.append(key, dataInput[key])
  }

  $.ajax({
    url: base+'/'+urlnya,
    type: "POST",
    data: form,
    processData: false,
    contentType: false,
    success: function(hasil) {
      var obj = JSON.parse(hasil)
      callBack(obj)
    },
    error: function(error) {
      alert("error");
      console.error(error);
    }
  })
}
