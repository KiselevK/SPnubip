using Microsoft.Owin;
using Owin;

[assembly: OwinStartupAttribute(typeof(SpNubip.Startup))]
namespace SpNubip
{
    public partial class Startup
    {
        public void Configuration(IAppBuilder app)
        {
            ConfigureAuth(app);
        }
    }
}
