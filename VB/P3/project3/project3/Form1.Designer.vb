<Global.Microsoft.VisualBasic.CompilerServices.DesignerGenerated()> _
Partial Class Form1
    Inherits System.Windows.Forms.Form

    'Form overrides dispose to clean up the component list.
    <System.Diagnostics.DebuggerNonUserCode()> _
    Protected Overrides Sub Dispose(ByVal disposing As Boolean)
        Try
            If disposing AndAlso components IsNot Nothing Then
                components.Dispose()
            End If
        Finally
            MyBase.Dispose(disposing)
        End Try
    End Sub

    'Required by the Windows Form Designer
    Private components As System.ComponentModel.IContainer

    'NOTE: The following procedure is required by the Windows Form Designer
    'It can be modified using the Windows Form Designer.  
    'Do not modify it using the code editor.
    <System.Diagnostics.DebuggerStepThrough()> _
    Private Sub InitializeComponent()
        Me.MenuStrip1 = New System.Windows.Forms.MenuStrip()
        Me.BroodToevoegenwijzigen = New System.Windows.Forms.ToolStripMenuItem()
        Me.NieuwBrood = New System.Windows.Forms.ToolStripMenuItem()
        Me.WijzigentoevoegenBrood = New System.Windows.Forms.ToolStripMenuItem()
        Me.GeldOpwaarderen = New System.Windows.Forms.ToolStripMenuItem()
        Me.DataGridView1 = New System.Windows.Forms.DataGridView()
        Me.btnInfoUpdaten = New System.Windows.Forms.Button()
        Me.KiesAfbeelding = New System.Windows.Forms.OpenFileDialog()
        Me.MenuStrip1.SuspendLayout()
        CType(Me.DataGridView1, System.ComponentModel.ISupportInitialize).BeginInit()
        Me.SuspendLayout()
        '
        'MenuStrip1
        '
        Me.MenuStrip1.Items.AddRange(New System.Windows.Forms.ToolStripItem() {Me.BroodToevoegenwijzigen, Me.GeldOpwaarderen})
        Me.MenuStrip1.Location = New System.Drawing.Point(0, 0)
        Me.MenuStrip1.Name = "MenuStrip1"
        Me.MenuStrip1.Size = New System.Drawing.Size(800, 24)
        Me.MenuStrip1.TabIndex = 0
        Me.MenuStrip1.Text = "MenuStrip1"
        '
        'BroodToevoegenwijzigen
        '
        Me.BroodToevoegenwijzigen.DropDownItems.AddRange(New System.Windows.Forms.ToolStripItem() {Me.NieuwBrood, Me.WijzigentoevoegenBrood})
        Me.BroodToevoegenwijzigen.Name = "BroodToevoegenwijzigen"
        Me.BroodToevoegenwijzigen.Size = New System.Drawing.Size(158, 20)
        Me.BroodToevoegenwijzigen.Text = "Brood toevoegen/wijzigen"
        '
        'NieuwBrood
        '
        Me.NieuwBrood.Name = "NieuwBrood"
        Me.NieuwBrood.Size = New System.Drawing.Size(215, 22)
        Me.NieuwBrood.Text = "Nieuw brood"
        '
        'WijzigentoevoegenBrood
        '
        Me.WijzigentoevoegenBrood.Name = "WijzigentoevoegenBrood"
        Me.WijzigentoevoegenBrood.Size = New System.Drawing.Size(215, 22)
        Me.WijzigentoevoegenBrood.Text = "Wijzigen/toevoegen brood"
        '
        'GeldOpwaarderen
        '
        Me.GeldOpwaarderen.Name = "GeldOpwaarderen"
        Me.GeldOpwaarderen.Size = New System.Drawing.Size(115, 20)
        Me.GeldOpwaarderen.Text = "Geld opwaarderen"
        '
        'DataGridView1
        '
        Me.DataGridView1.ColumnHeadersHeightSizeMode = System.Windows.Forms.DataGridViewColumnHeadersHeightSizeMode.AutoSize
        Me.DataGridView1.Location = New System.Drawing.Point(12, 60)
        Me.DataGridView1.Name = "DataGridView1"
        Me.DataGridView1.Size = New System.Drawing.Size(490, 150)
        Me.DataGridView1.TabIndex = 1
        '
        'btnInfoUpdaten
        '
        Me.btnInfoUpdaten.Location = New System.Drawing.Point(12, 216)
        Me.btnInfoUpdaten.Name = "btnInfoUpdaten"
        Me.btnInfoUpdaten.Size = New System.Drawing.Size(75, 23)
        Me.btnInfoUpdaten.TabIndex = 2
        Me.btnInfoUpdaten.Text = "Update info"
        Me.btnInfoUpdaten.UseVisualStyleBackColor = True
        '
        'KiesAfbeelding
        '
        Me.KiesAfbeelding.FileName = "OpenFileDialog1"
        '
        'Form1
        '
        Me.AutoScaleDimensions = New System.Drawing.SizeF(6.0!, 13.0!)
        Me.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font
        Me.ClientSize = New System.Drawing.Size(800, 450)
        Me.Controls.Add(Me.btnInfoUpdaten)
        Me.Controls.Add(Me.DataGridView1)
        Me.Controls.Add(Me.MenuStrip1)
        Me.MainMenuStrip = Me.MenuStrip1
        Me.Name = "Form1"
        Me.Text = "Form1"
        Me.MenuStrip1.ResumeLayout(False)
        Me.MenuStrip1.PerformLayout()
        CType(Me.DataGridView1, System.ComponentModel.ISupportInitialize).EndInit()
        Me.ResumeLayout(False)
        Me.PerformLayout()

    End Sub

    Friend WithEvents MenuStrip1 As MenuStrip
    Friend WithEvents BroodToevoegenwijzigen As ToolStripMenuItem
    Friend WithEvents NieuwBrood As ToolStripMenuItem
    Friend WithEvents WijzigentoevoegenBrood As ToolStripMenuItem
    Friend WithEvents GeldOpwaarderen As ToolStripMenuItem
    Friend WithEvents DataGridView1 As DataGridView
    Friend WithEvents btnInfoUpdaten As Button
    Friend WithEvents KiesAfbeelding As OpenFileDialog
End Class
