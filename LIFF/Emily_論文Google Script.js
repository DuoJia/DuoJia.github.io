## 推播程式碼
// 每天執行
function doEveryday( )
   if（getWeekday( )<=5)
   pushMsg( line_token , getWord( ) + getSentense( ))
   Else doNothing //週末不推播
end function

// 推播功能
function pushMsg( line_token, text)
   LineMessageAPI_BroadcastFunction
end function

// 取得每日單字
function getWord( ) 
   set URL = google_spread_sheet_URL
   set Spreadsheet = SpreadsheetApp.openByUrl(URL)
   set Sheetname = Spreadsheet.getSheetByName(sheetName)
   set day = today.getTime() / 86400000
   set question = new Array( )
   set answer = new Array( )
   // n = 常數（欲開始的日期unix值）
   for( r = day-n ; r = day-n +10 ; r= r+1) do
            question.push(Sheetname.getSheetValues(r,1,1,1)
    answer.push(Sheetname.getSheetValues(r,2,1,1)
   end for

   set text = “今日單字”+question[ ]+answer[ ]
   return text
End function

// 取得每日例句
function getSentense( ) 
   set URL = google_spread_sheet_URL
   set Spreadsheet = SpreadsheetApp.openByUrl(URL)
   set Sheetname = Spreadsheet.getSheetByName(sheetName)
   set day = today.getTime() / 86400000
   set day_series = new Array( )
   for ( i =1 ; i <= sheetName.getMaxrows( ); i = i + 1) 
   day_series.push( Sheetname.getsheetValues(i ,3,1,1)
   end for

   set cht = new Array( ) 
   set eng = new Array( )
   for ( r= 0; r< day_series.length( ) ;r= r+1)
      if ( day-n == day_series[ r-1]                  cht.push(Sheetname.getSheetValues(r,1,1,1)
eng.push(Sheetname.getSheetValues(r,2,1,1)
      end if
   end for

   set text = “今日例句”+cht[ ]+eng[ ]
   return text
End function

function getWeekday( )
   set Today = new Date( ).getDay( )
   return Today
end function
