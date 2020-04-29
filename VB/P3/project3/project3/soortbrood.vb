Imports System.Data
Imports MySql.Data
Imports MySql.Data.MySqlClient
Imports System.Configuration
Imports System.IO
Public Class soortbrood
    Public conn As MySqlConnection
    Public connstring As String = "server=localhost;Port=3307;database=project3;uid=root;password=usbw; "

    Private _naamBrood As String
    Private _img As String
    Public Property NaamBrood() As String
        Get
            Return _naamBrood
        End Get
        Set(ByVal value As String)
            _naamBrood = value
        End Set
    End Property
    Public Property Img() As String
        Get
            Return _img
        End Get
        Set(ByVal value As String)
            _img = value
        End Set
    End Property
    Public Sub New()
    End Sub
    Public Sub New(naamBrood As String, img As String)
        Me.NaamBrood = naamBrood
        Me.Img = img
    End Sub
    Public Shared Sub Add(naambrood, img)
        Dim connstring As String = "server=localhost;Port=3307;database=project3;uid=root;password=usbw; "
        Using SQLConnection = New MySqlConnection(connstring)
            Using sqlCommand As New MySqlCommand()
                With sqlCommand
                    .CommandText = "INSERT INTO `soortbrood` (`naambrood`, `img`)VALUES(@naambrood, @img)"
                    .Connection = SQLConnection
                    .CommandType = CommandType.Text
                    .Parameters.AddWithValue("@naambrood", naambrood)
                    .Parameters.AddWithValue("@img", img)
                End With
                Try
                    SQLConnection.Open()
                    sqlCommand.ExecuteNonQuery()
                Catch ex As MySqlException
                    MsgBox(ex.Message.ToString)
                Finally
                    SQLConnection.Close()
                End Try
            End Using
        End Using
    End Sub
End Class

