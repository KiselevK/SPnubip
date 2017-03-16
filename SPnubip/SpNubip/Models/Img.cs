namespace SpNubip.Models
{
    using System;
    using System.Collections.Generic;
    using System.ComponentModel.DataAnnotations;
    using System.ComponentModel.DataAnnotations.Schema;
    using System.Data.Entity.Spatial;

    public partial class Img
    {
        [System.Diagnostics.CodeAnalysis.SuppressMessage("Microsoft.Usage", "CA2214:DoNotCallOverridableMethodsInConstructors")]
        public Img()
        {
            Imgs_for_projects = new HashSet<Imgs_for_projects>();
        }

        [Key]
        public Guid Id_Img { get; set; }

        [Required]
        public string Url_Img { get; set; }

        [System.Diagnostics.CodeAnalysis.SuppressMessage("Microsoft.Usage", "CA2227:CollectionPropertiesShouldBeReadOnly")]
        public virtual ICollection<Imgs_for_projects> Imgs_for_projects { get; set; }
    }
}
