Public Class klant
    Private _codeKlant As Int16
    Private _saldo As Decimal
    Private _naam As String
    Public Property CodeKlant() As Int16
        Get
            Return _codeKlant
        End Get
        Set(ByVal value As Int16)
            _codeKlant = value
        End Set
    End Property
    Public Property Saldo() As Decimal
        Get
            Return _saldo
        End Get
        Set(ByVal value As Decimal)
            _saldo = value
        End Set
    End Property
    Public Property Naam() As String
        Get
            Return _naam
        End Get
        Set(ByVal value As String)
            _naam = value
        End Set
    End Property

    Public Sub New()
    End Sub

    Public Sub New(codeKlant As Short, saldo As Decimal, naam As String)
        Me.CodeKlant = codeKlant
        Me.Saldo = saldo
        Me.Naam = naam
    End Sub
End Class
