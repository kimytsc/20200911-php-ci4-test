<%@LANGUAGE="VBSCRIPT" CODEPAGE="65001"%>
<%
 Session.CodePage = "65001"
		 Response.CharSet = "UTF-8"
%>
<Object RunAt=Server ProgID=DEXT.FileUpload ID=DXT></Object>
<Object RunAt=Server ProgID=Scripting.FileSystemObject ID=Fso></Object>
<%

responseType=  request("responseType")


'########################## 로그인 체크 ###############
If(false)then
	If(Session("tblMemberIdx")="")Then
		
		'로그인정보가 없을때!!!!
		If(responseType="json")Then

			 Response.addHeader "pragma", "no-cache"
			 Response.addHeader "cache-control", "private"
			 Response.AddHeader "Expires","0"
			 Response.CacheControl = "no-cache"
			 Response.ContentType = "application/json"

	%>
			{
				"uploaded": 0,
				  "error": {
					  "message":"로그인 후 가능합니다."
				  }
			}

	<%
			response.End
		else
			'로그인정보가 없을때!!!!
	%>
			<script type="text/javascript">
				alert("로그인 후 가능합니다.");
			</script>
	<%
		'	Response.Redirect "/em/login.asp"
			response.End
		End if
	End If
End If
'########################## 로그인 체크 ###############


'If(Session("tblMemberIdx")<>"")Then
'	userIdx=""&Session("tblMemberIdx")&""
'ElseIf(Session("admin_tblMemberIdx")<>"")Then
'	userIdx=""&Session("admin_tblMemberIdx")&""
'End if


Dim BoardName
Dim strUrl, files, File_Name, File_MType, FileExt


Dim DefaultFileSaveDir ' 파일 저장 경로

DefaultFileSaveDir = "/fileUp/editorImg"	

'-------------------------------------------
' ▒ 파일명 생성 ▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒
'-------------------------------------------
Public Function LeftFillString ( strValue, fillChar, makeLength )
    Dim strRet
    Dim strLen, diff, i

    strRet  = ""
    strLen  = Len(strValue)
    diff    = CInt(makeLength) - strLen

    if diff > 0 then
        for i=1 to diff
            strRet = strRet & CStr(fillChar)
        next
    end if
    LeftFillString = strRet & CStr(strValue)
End Function

Public Function MakeUniqueFileName( strPrename )
    Dim strFilename
    Dim dtNow
    dtNow = now()
    Randomize()
    strFilename = strPrename
    strFilename = strFilename & Year(dtNow)
    strFilename = strFilename & LeftFillString( Month(dtNow),   "0", 2 )
    strFilename = strFilename & LeftFillString( Day(dtNow),     "0", 2 )
    strFilename = strFilename & "_"
    strFilename = strFilename & LeftFillString( Hour(dtNow),    "0", 2 )
    strFilename = strFilename & LeftFillString( Minute(dtNow),  "0", 2 )
    strFilename = strFilename & LeftFillString( Second(dtNow),  "0", 2 )
    strFilename = strFilename & "_"  
    strFilename = strFilename & LeftFillString ( Int(Rnd * 1000000), "0", 7 )
    MakeUniqueFileName = strFilename
End Function
'-------------------------------------------
' ▒ //파일명 생성 ▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒▒
'-------------------------------------------

DXT.AutoMakeFolder = True
'DXT.DefaultPath = Server.MapPath("\Upload\Editor\Temp")
DXT.DefaultPath = DefaultFileSaveDir
DXT.MaxFileLen = (1024 * 1024 * 10)
DXT.CodePage  = 65001

'Response.Write DXT("htImageInfo")

CKEditorFuncNum =  request("CKEditorFuncNum")
responseType=  request("responseType")

files             = DXT("upload").FileName
File_MType   = DXT("upload").IsImageItem
FileExt         =  DXT("upload").FileExtension

'fileName  =  DXT("upload")

If File_MType = True Then 
    		
	Dim Upload_Filename 
	
	' 파일명을 소문자로 변경해 줄 것 
	Upload_FileName = LCase(MakeUniqueFileName("idx_editor_") & "." & FileExt)
	File_Name=DXT("upload").SaveAs(DXT.DefaultPath & "\" & Upload_Filename , False)
	

	' 모든 경로를 다 소문자로 통일시켜 줄 것 
	strUrl = "/fileUp/editorImg/" & Upload_FileName     
			
'	Response.Redirect strUrl
	
	If(responseType="json")Then
		 
'		 Session.CodePage = "65001"
'		 Response.CharSet = "UTF-8"
		 Response.addHeader "pragma", "no-cache"
		 Response.addHeader "cache-control", "private"
		 Response.AddHeader "Expires","0"
		 Response.CacheControl = "no-cache"
		 Response.ContentType = "application/json"


%>
		{
			"uploaded": 1,
			"fileName": "<%=Upload_FileName%>",
			"url":"<%=strUrl%>"
		}

<%
	Else
%>
	<script type="text/javascript">
		parent.CKEDITOR.tools.callFunction('<%=CKEditorFuncNum%>', '<%=strUrl%>', '')
	</script>
<%	

	End if


Else

	If(responseType="json")Then
		
'	 Session.CodePage = "65001"
'	 Response.CharSet = "UTF-8"
	 Response.addHeader "pragma", "no-cache"
	 Response.addHeader "cache-control", "private"
	 Response.AddHeader "Expires","0"
	 Response.CacheControl = "no-cache"
	 Response.ContentType = "application/json"

%>
		{
			"uploaded": 0,
			  "error": {
				  "message":"이미지가 업로드 되지 않았습니다."
			  }
		}

<%
	else
 %>

	<script type="text/javascript">
		alert('이미지 파일이 아닙니다.');
		parent.location.reload();
	</script>
	<% End If%>
<% End If%>