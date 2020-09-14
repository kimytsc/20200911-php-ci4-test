<%

'-----------------------------------------------------------
' 페이지명 : CK에디터 공통 모듈
' 작 성 자 :
' 작 성 일 :
' 수 정 자 :
' 수 정 일 :
'-----------------------------------------------------------


'--------------------------------------------
' ▒ CK에디터 상단 JS 파일 보여주기 ▒▒▒▒▒▒▒▒
'--------------------------------------------
Sub ckEditerTop()
	Response.Write ("<script type=""text/javascript"" src=""/eadmin/assets/api/ckeditor/ckeditor.js?d="&now&""" charset=""utf-8""></script>")
End Sub
'--------------------------------------------
' ▒ //CK에디터 JS 파일 보여주기 ▒▒▒▒▒▒▒▒
'--------------------------------------------


'--------------------------------------------
' ▒ CK에디터 컨텐츠 JS 스크립트 파일 보여주기 ▒▒▒
'--------------------------------------------

' @Param : TextAreaName  -> textarea 의 name 값

Sub ckEditerContent(ByVal TextAreaName,ByVal BoardName)
'  1).  js/simple.js 파일 안의 내용 이곳에 넣어준 것임
%>
	<script type="text/javascript" language="javascript">

	   var ckEditor_<%=TextAreaName%>;

	   jQuery(document).ready(function(e){

			ckEditor_<%=TextAreaName%>=CKEDITOR.replace( '<%=TextAreaName%>' );
		});

	</script>
<%
 End Sub
'--------------------------------------------
' ▒ //CK에디터 컨텐츠 JS 스크립트 파일 보여주기 ▒▒
'--------------------------------------------


'--------------------------------------------
' ▒  textarea 스크립트 체크  ▒▒▒▒▒▒▒▒▒▒▒▒
'--------------------------------------------
Sub ckEditerScriptChkeck(ByVal TextAreaName)
   Response.Write "ckEditor_"& TextAreaName &".updateElement();"
End Sub
'--------------------------------------------
' ▒  //textarea 스크립트 체크  ▒▒▒▒▒▒▒▒▒▒
'--------------------------------------------


%>
