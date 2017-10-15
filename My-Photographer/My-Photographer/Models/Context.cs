namespace My_Photographer.Models
{
    using System;
    using System.Data.Entity;
    using System.ComponentModel.DataAnnotations.Schema;
    using System.Linq;

    public partial class Context : DbContext
    {
        public Context()
            : base("name=Context")
        {
        }

        public virtual DbSet<Fotograf> Fotograf { get; set; }
        public virtual DbSet<Fotograf_Photo> Fotograf_Photo { get; set; }
        public virtual DbSet<Photos> Photos { get; set; }
        public virtual DbSet<Rate> Rate { get; set; }
        public virtual DbSet<Register> Register { get; set; }
        public virtual DbSet<sysdiagrams> sysdiagrams { get; set; }
        public virtual DbSet<User_Fotograf_Photo> User_Fotograf_Photo { get; set; }

        protected override void OnModelCreating(DbModelBuilder modelBuilder)
        {
            modelBuilder.Entity<Fotograf>()
                .HasMany(e => e.Fotograf_Photo)
                .WithRequired(e => e.Fotograf)
                .HasForeignKey(e => e.IDfotograf)
                .WillCascadeOnDelete(false);

            modelBuilder.Entity<Fotograf>()
                .HasMany(e => e.User_Fotograf_Photo)
                .WithRequired(e => e.Fotograf)
                .HasForeignKey(e => e.IDfotograf)
                .WillCascadeOnDelete(false);

            modelBuilder.Entity<Photos>()
                .HasMany(e => e.Fotograf_Photo)
                .WithRequired(e => e.Photos)
                .HasForeignKey(e => e.IDphoto)
                .WillCascadeOnDelete(false);

            modelBuilder.Entity<Rate>()
                .HasMany(e => e.User_Fotograf_Photo)
                .WithRequired(e => e.Rate)
                .HasForeignKey(e => e.IDrate)
                .WillCascadeOnDelete(false);

            modelBuilder.Entity<Register>()
                .Property(e => e.Nume)
                .IsFixedLength();

            modelBuilder.Entity<Register>()
                .Property(e => e.Prenume)
                .IsFixedLength();

            modelBuilder.Entity<Register>()
                .Property(e => e.gender)
                .IsFixedLength();

            modelBuilder.Entity<Register>()
                .Property(e => e.email)
                .IsFixedLength();

            modelBuilder.Entity<Register>()
                .Property(e => e.username)
                .IsFixedLength();

            modelBuilder.Entity<Register>()
                .HasMany(e => e.Fotograf)
                .WithRequired(e => e.Register)
                .HasForeignKey(e => e.IDregister)
                .WillCascadeOnDelete(false);
        }
    }
}
