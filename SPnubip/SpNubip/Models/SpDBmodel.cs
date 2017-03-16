namespace SpNubip.Models
{
    using System;
    using System.Data.Entity;
    using System.ComponentModel.DataAnnotations.Schema;
    using System.Linq;

    public partial class SpDBmodel : DbContext
    {
        public SpDBmodel()
            : base("name=SpDBmodel")
        {
        }

        public virtual DbSet<Category> Categories { get; set; }
        public virtual DbSet<Img> Imgs { get; set; }
        public virtual DbSet<Imgs_for_projects> Imgs_for_projects { get; set; }
        public virtual DbSet<News> News { get; set; }
        public virtual DbSet<Partner> Partners { get; set; }
        public virtual DbSet<Project> Projects { get; set; }

        protected override void OnModelCreating(DbModelBuilder modelBuilder)
        {
            modelBuilder.Entity<Category>()
                .HasMany(e => e.Projects)
                .WithRequired(e => e.Category)
                .WillCascadeOnDelete(false);

            modelBuilder.Entity<Img>()
                .HasMany(e => e.Imgs_for_projects)
                .WithRequired(e => e.Img)
                .WillCascadeOnDelete(false);

            modelBuilder.Entity<Imgs_for_projects>()
                .HasMany(e => e.Projects)
                .WithRequired(e => e.Imgs_for_projects)
                .WillCascadeOnDelete(false);
        }
    }
}
