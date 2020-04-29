Imports System.Data
Imports MySql.Data
Imports MySql.Data.MySqlClient
Imports System.Configuration
Imports System.IO

Public Class Form1
    Private broodlijst As New List(Of soortbrood)
    Public conn As MySqlConnection
    Public connstring As String = "server=localhost;Port=3307;database=project3;uid=root;password=usbw; "

    Private Sub GeldOpwaarderen_Click(sender As Object, e As EventArgs) Handles GeldOpwaarderen.Click
        conn = New MySqlConnection(connstring)

        conn.Open()

        Dim mySelectQuery As String = "select codeKlant as 'Klantencode', naam as 'Naam klant', saldo as 'Saldo' from klant"
        Dim myCommand As New MySqlCommand(mySelectQuery, conn)

        Dim rd As MySqlDataReader
        rd = myCommand.ExecuteReader()


        Dim dt = New DataTable()
        dt.Load(rd)
        DataGridView1.DataSource = dt
        DataGridView1.Refresh()

        Dim ds As New DataSet("klant")
        ds.Tables.Add(dt)

        conn.Close()
    End Sub

    Private Sub NieuwBrood_Click(sender As Object, e As EventArgs) Handles NieuwBrood.Click
        conn = New MySqlConnection(connstring)

        conn.Open()

        Dim resultaat As DialogResult = KiesAfbeelding.ShowDialog()
        With KiesAfbeelding
            .InitialDirectory = "C:\afbeeldingen"
        End With

        If resultaat = Windows.Forms.DialogResult.OK Then
            ' Start met inlezen.
            Dim gekozenPad = Path.GetFullPath(KiesAfbeelding.FileName)

            Dim t = gekozenPad.Split("\")
            Dim bestandsnaam = t(2)
            gekozenPad = bestandsnaam
            t = gekozenPad.Split(".")
            bestandsnaam = t(0)
            MsgBox(bestandsnaam)
            'broodlijst.Add(New soortbrood(bestandsnaam, gekozenPad))

            soortbrood.Add(bestandsnaam, gekozenPad)

        End If
        conn.Close()
    End Sub

    Private Sub WijzigentoevoegenBrood_Click(sender As Object, e As EventArgs) Handles WijzigentoevoegenBrood.Click
        conn = New MySqlConnection(connstring)

        conn.Open()

        Dim mySelectQuery As String = "select soortbrood.idSoortBrood as 'ID brood', naamBrood as 'Naam brood', img as Afbeelding, hoeveelheid as Aantal, prijs as Prijs from soortBrood join locatiebrood"
        Dim myCommand As New MySqlCommand(mySelectQuery, conn)

        Dim rd As MySqlDataReader
        rd = myCommand.ExecuteReader()


        Dim dt = New DataTable()
        dt.Load(rd)
        DataGridView1.DataSource = dt
        DataGridView1.Refresh()

        Dim ds As New DataSet("brood")
        ds.Tables.Add(dt)

        conn.Close()
    End Sub

    Private Sub btnInfoUpdaten_Click(sender As Object, e As EventArgs) Handles btnInfoUpdaten.Click





        'conn = New MySqlConnection(connstring)

        'conn.Open()



        'conn.Close()
    End Sub

    Private Sub Form1_Load(sender As Object, e As EventArgs) Handles MyBase.Load


    End Sub

    Private Sub KiesAfbeelding_FileOk(sender As Object, e As System.ComponentModel.CancelEventArgs) Handles KiesAfbeelding.FileOk

    End Sub
End Class
