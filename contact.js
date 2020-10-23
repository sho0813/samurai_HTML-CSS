function check(){
  if(form.name.value==""){
      alert("お名前が入力されていません。お名前を入力してください。")
      return false;
  }else if(form.email.value==""){
      alert("メールアドレスが入力されていません。メールアドレスを入力してください。")
      return false;
  }else if(form.yearolds.value==""){
      alert("年齢が入力されていません。年齢を入力してください。")
      return false;
  }else if(isFinite(form.yearolds.value==false)){
    alert("年齢が正しく入力されていません。正しく年齢を入力してください。")
  return false;
  }else if(form.sex.value==""){
      alert("性別が入力されていません。性別を入力してください。")
      return false;
  }else if(form.text.value==""){
      alert("ご意見が入力されていません。ご意見を入力してください。")
      return false;
  }else{
      return true;
  }
}

