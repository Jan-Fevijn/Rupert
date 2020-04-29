Public Class locatiebrood
    Private _idSoortBrood As Int16
    Private _locatieCode As Int16
    Private _hoeveelheid As Int16
    Private _prijs As Decimal
    Public Property IdSoortBrood() As Int16
        Get
            Return _idSoortBrood
        End Get
        Set(ByVal value As Int16)
            _idSoortBrood = value
        End Set
    End Property
    Public Property LocatieCode() As Int16
        Get
            Return _locatieCode
        End Get
        Set(ByVal value As Int16)
            _locatieCode = value
        End Set
    End Property
    Public Property Hoeveelheid() As Int16
        Get
            Return _hoeveelheid
        End Get
        Set(ByVal value As Int16)
            _hoeveelheid = value
        End Set
    End Property
    Public Property Prijs() As Decimal
        Get
            Return _prijs
        End Get
        Set(ByVal value As Decimal)
            _prijs = value
        End Set
    End Property

    Public Sub New()
    End Sub

    Public Sub New(idSoortBrood As Short, locatieCode As Short, hoeveelheid As Short, prijs As Decimal)
        Me.IdSoortBrood = idSoortBrood
        Me.LocatieCode = locatieCode
        Me.Hoeveelheid = hoeveelheid
        Me.Prijs = prijs
    End Sub
End Class
